<?php

namespace App\Repositories\Permission\Group;

/**
 * Interface PermissionGroupRepositoryContract.
 */
interface PermissionGroupRepositoryContract
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * @param int $limit
     *
     * @return mixed
     */
    public function getGroupsPaginated($limit = 50);

    /**
     * @param bool $withChildren
     *
     * @return mixed
     */
    public function getAllGroups();

    /**
     * @param $input
     *
     * @return mixed
     */
    public function store($input);

    /**
     * @param $id
     * @param $input
     *
     * @return mixed
     */
    public function update($id, $input);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param $input
     *
     * @return mixed
     */
    public function updateSort($input);
}
