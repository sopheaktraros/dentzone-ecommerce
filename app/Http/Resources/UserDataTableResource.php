<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDataTableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request) {

        $status = $this->active===1?'<span class="text-success" style="font-weight: bold">Active</span>':'<span class="text-danger font-bold" style="font-weight: bold">Inactive</span>';

        $role = $this->roles()->first();

        if ($role) {
            $role = '<div class="role-group"><span class="role">'.$role->name.'</span></div>';
        }

        $button ='';

        if ($request->user()->can('users','update')) {
            $button = '<a href="'.route('users.edit',encrypt($this->id)).'" id="btn-edit" class="btn-edit btn btn-primary btn-sm"
            data-toggle="tooltip" data-placement="left" title="Edit"><i class="far fa-edit"></i> </a>';
        }

        if ($request->user()->can('users','delete')) {
            $button .= '
            <form action="'.route('users.destroy',encrypt($this->id)).'" id="fm-role-delete'.$this->id.'" class="fm-delete" method="POST" novalidate>
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="DELETE">
                <button type="button" class="btn-delete btn btn-danger btn-sm"
                data-toggle="tooltip" data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></button>
            </form>';
        }
        $button = '<div class="btn-group-sm d-inline-flex">'.$button.'</div>';

        return [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'role' => $role,
            'create_by'=>create_by($this->create_by),
            'create_at'=>$this->create_at,
            'status' => $status,
            'action' => $button
        ];
    }
}
