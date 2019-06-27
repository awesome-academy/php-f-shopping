<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{

    /**
     * @var $model
     */
    protected $model;
    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * set reponsitory instant
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param  array $columns
     * @return mixed
     */
    public function all($orderBy = 'updated_at desc', $columns = ['*'])
    {
        return $this->model->orderByRaw($orderBy)->get($columns);
    }

    /**
     * @param  int   $perPage Per page
     * @param  array $columns Array Columns
     * @return array Return data paginate
     */
    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param  array $data Array data
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param  array  $data      Array data
     * @param  $id ID
     * @param  string $attribute Attribute
     * @return void
     */
    public function update(array $data, $id, $attribute = "id")
    {
         return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param  array      $data      Array data
     * @param  $id ROLE_ID
     * @param  string     $attribute Attribute
     * @return void
     */
    public function update_role(array $data, $role_id, $attribute = "role_id")
    {
         return $this->model->where($attribute, '=', $role_id)->update($data);
    }

    /**
     * @param  $id ID
     * @return void
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * @param  $id ID
     * @param  array $columns Columns
     * @return array Return array
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     * @param  $attribute Attribute
     * @param  $value Value
     * @param  array               $columns Columns
     * @return array Array
     */
    public function findBy($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function findByReturnArray($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    public function findByReturnArrayPlug($attribute, $value, $pluck, $columns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->get($columns)->pluck($pluck);
    }
    public function findByMultiConditionsLimit($whereData = [], $columns = ['*'])
    {
        return $this->model->where($whereData)->first($columns);
    }
    /**
     * @param  $tableName Table name
     * @param  array                $whereData Array where data
     * @return array Return array
     */
    public function findByMultiConditions($tableName, $whereData = [])
    {
        return DB::table($tableName)->where($whereData)->get();
    }

    /**
     * @param  $tableName Table name
     * @param  array                $whereData Array where data
     * @return array Return array
     */
    public function pagingWithMultiConditions($tableName, $whereData = [], $perPage = 15, $orderBy = 'id desc', $columns = ['*'])
    {
        return DB::table($tableName)
            ->where($whereData)
            ->orderByRaw($orderBy)
            ->paginate($perPage, $columns);
    }

    public function delByMultiConditions($tableName, $whereData = [])
    {
        return DB::table($tableName)
            ->where($whereData)
            ->delete();
    }

    /**
     * @param  array $whereData
     * @return mixed
     */

    public function delByMultiConditionsModel($whereData = [])
    {
        return $this->model
            ->where($whereData)
            ->delete();
    }


    /**
     * update records by multi conditions
     *
     * @param  $tableName Table name
     * @param  array                $data      Array data
     * @param  array                $whereData Array where data
     * @return void
     */
    public function updateByMultiConditionsModel(array $data, $whereData = [])
    {
        return $this->model
            ->where($whereData)
            ->update($data);
    }

    /**
     * @param  $tableName
     * @param  array     $whereData
     * @return mixed
     */
    public function countByMultiConditions($tableName, $whereData = [])
    {
        return DB::table($tableName)
            ->where($whereData)
            ->count();
    }

    /**
     * @param  array $whereData
     * @return mixed
     */
    public function countByMultiConditionsModel($whereData = [])
    {
        return $this->model
            ->where($whereData)
            ->count();
    }



    /**
     * @param  array  $whereData
     * @param  string $orderBy
     * @param  array  $select
     * @return mixed
     */
    public function getByMultiConditionsModel($whereData = [], $orderBy = "id desc", $select = array("*"))
    {

        return $this->model
            ->select($select)
            ->where($whereData)
            ->orderByRaw($orderBy)
            ->get();
    }

    public function getByMultiConditionsPagination($tableName, $whereData = [], $select = array("*"), $orderBy = "id desc", $perpage = 10)
    {

        return DB::table($tableName)
            ->select($select)
            ->where($whereData)
            ->orderByRaw($orderBy)
            ->paginate($perpage);
    }

    public function getByInConditions($tableName, $field, $data = [], $select = array("*"), $orderBy = "id desc")
    {
        return DB::table($tableName)
            ->select($select)
            ->whereIn($field, $data)
            ->orderByRaw($orderBy)
            ->get();
    }

    public function getManyWhereOrder($whereData = [], $select = array("*"), $orderBy = "id asc")
    {

        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->get();
    }

    public function getManyWhereOrderLimitNumber($whereData = [], $limit = 5, $select = array("*"), $orderBy = "id desc")
    {

        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->limit($limit)
            ->get();
    }
    public function getManyWhereOrderLimit($whereData = [], $select = array("*"), $orderBy = "id desc")
    {

        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->first();
    }
    public function getManyWhereOrderPagination($whereData = [], $select = array("*"), $orderBy = "id desc", $perpage = 10)
    {
        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->paginate($perpage);
    }
    public function searchItemInStringList($stringList, $columnSearch, $select = array("*"))
    {
        return $this->model
            ->select($select)
            ->whereRaw("find_in_set(" . $columnSearch . ", '" . $stringList . "')")
            ->get();
    }

    public function searchItemInStringListUnequi($stringList, $columnSearch, $select = array("*"), $whereData = [])
    {

        return $this->model
            ->select($select)
            ->distinct()
            ->where($whereData)
            ->whereRaw("find_in_set(" . $columnSearch . ", '" . $stringList . "')")
            ->get();
    }
    
    public function deleteByMultiConditions($whereData = [])
    {
        return $this->model
            ->where($whereData)
            ->delete();
    }
    
    public function findByMultiConditionsModelLimit($whereData = [], $orderBy = "id asc")
    {
        return $this->model
            ->where($whereData)
            ->orderByRaw($orderBy)
            ->first();
    }

    public function getMaxColumn($whereData)
    {
        return $this->model
            ->select(DB::raw('MAX(id) as id'))
            ->where($whereData)
            ->first();
    }

    public function firstOrCreateModel(array $attributes)
    {
        return $this->model->firstOrCreate($attributes);
    }
    public function updateOrCreateModel($whereData = [], $data = [])
    {
        return $this->model
            ->updateOrCreate(
                $whereData,
                $data
            );
    }
}
