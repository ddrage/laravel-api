<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAddRequest;
use App\Http\Requests\CompanyEditRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Exception;
class CompanyController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Company::query();
		if($request->search){
			$search = trim($request->search);
			Company::search($query, $search);
		}
		$orderby = $request->orderby ?? "Company.companyno";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Company::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Company::query();
		$record = $query->findOrFail($rec_id, Company::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(CompanyAddRequest $request){
		$modeldata = $request->validated();
		
		//save Company record
		$record = Company::create($modeldata);
		$rec_id = $record->companyno;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(CompanyEditRequest $request, $rec_id = null){
		$query = Company::query();
		$record = $query->findOrFail($rec_id, Company::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $request->validated();
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
		$query = Company::query();
		$query->whereIn("companyno", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
