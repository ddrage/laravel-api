<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\HositeterminalsAddRequest;
use App\Http\Requests\HositeterminalsEditRequest;
use App\Models\Hositeterminals;
use Illuminate\Http\Request;
use Exception;
class HositeterminalsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Hositeterminals::query();
		if($request->search){
			$search = trim($request->search);
			Hositeterminals::search($query, $search);
		}
		$orderby = $request->orderby ?? "HOSiteTerminals.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Hositeterminals::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Hositeterminals::query();
		$record = $query->findOrFail($rec_id, Hositeterminals::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(HositeterminalsAddRequest $request){
		$modeldata = $request->validated();
		
		if( array_key_exists("textfile", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['textfile'], "textfile");
			$modeldata['textfile'] = $fileInfo['filepath'];
		}
		
		if( array_key_exists("flagfile", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['flagfile'], "flagfile");
			$modeldata['flagfile'] = $fileInfo['filepath'];
		}
		$modeldata['dbpassword'] = bcrypt($modeldata['dbpassword']);
		
		//save Hositeterminals record
		$record = Hositeterminals::create($modeldata);
		$rec_id = $record->id;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(HositeterminalsEditRequest $request, $rec_id = null){
		$query = Hositeterminals::query();
		$record = $query->findOrFail($rec_id, Hositeterminals::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $request->validated();
		
		if( array_key_exists("textfile", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['textfile'], "textfile");
			$modeldata['textfile'] = $fileInfo['filepath'];
		}
		
		if( array_key_exists("flagfile", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['flagfile'], "flagfile");
			$modeldata['flagfile'] = $fileInfo['filepath'];
		}
			$record->update($modeldata);
		}
		return $this->respond($record);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Hositeterminals::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
