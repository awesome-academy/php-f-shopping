<?php

namespace App\Repositories;

/**
 * Description of RepositoryInterface
 *
 * @author DangNH
 */
interface RepositoryInterface
{

    /**
     * Get all column
     *
     * @param array $columns
     */
    public function all($columns = ['*']);

    /**
     * paginate data
     *
     * @param integer $perPage
     * @param array   $columns
     */

    public function paginate($perPage = 15, $columns = ['*']);

    /**
     * create data
     *
     * @param array $data
     */
    public function create(array $data);
    /**
     * update data
     *
     * @param array   $data
     * @param integer $id
     */

    public function update(array $data, $id);

    /**
     * delete data
     *
     * @param integer $id
     */
    public function delete($id);

    /**
     * find data
     *
     * @param integer $id
     * @param array   $columns
     */
    public function find($id, $columns = ['*']);

    /**
     * findBy column
     *
     * @param string $field
     * @param string $value
     * @param array  $columns
     */
    public function findBy($field, $value, $columns = ['*']);

    /**
     * Get by id
     *
     * @param integer $id
     */
    public function getById($id);

    /**
     * findByMultiConditions
     *
     * @param string $tableName
     * @param array  $whereData
     */
    public function findByMultiConditions($tableName, $whereData = []);

    /**
     * paging With Multi Conditions
     *
     * @param string  $tableName
     * @param array   $whereData
     * @param integer $perPage
     * @param array   $columns
     */
    public function pagingWithMultiConditions($tableName, array $whereData = [], $perPage = 15, array $columns = ['*']);

    /**
     * del By Multi Conditions
     *
     * @param string $tableName
     * @param array  $whereData
     */
    public function delByMultiConditions($tableName, $whereData = []);
}
