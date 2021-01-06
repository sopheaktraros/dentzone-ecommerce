<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionDataTableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  $request
     * @return array
     */
    public function toArray($request) {

        $status = $this->active===1?'<span class="text-success" style="font-weight: bold">Active</span>':'<span class="text-danger font-bold" style="font-weight: bold">Inactive</span>';

        $button ='';

        $roles = '';

        if (count($this->roles)>0) {
            foreach ($this->roles->pluck('name') as $role){
                $roles .='<small class="role">'.$role.'</small>';
            }
        }

        if ($request->user()->can('permissions','update')) {
            $button = '<a href="'.route('permissions.edit',encrypt($this->id)).'" id="btn-edit" class="btn-edit btn btn-primary btn-sm"
            data-toggle="tooltip" data-placement="left" title="Edit"><i class="far fa-edit"></i> </a>';
        }

        if ($request->user()->can('permissions','delete') && $request->user()->hasRole('root')) {
            $button .= '
            <form action="'.route('permissions.destroy',encrypt($this->id)).'" id="fm-role-delete'.$this->id.'" class="fm-delete" method="POST" novalidate>
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="DELETE">
                <button type="button" class="btn-delete btn btn-danger btn-sm"
                data-toggle="tooltip" data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></button>
            </form>';
        }
        $button = '<div class="btn-group-sm d-inline-flex">'.$button.'</div>';

        $roles ='<div class="group-role">'.$roles.'</div>';

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'roles'=>$roles,
            'status' => $status,
            'action' => $button
        ];
    }
}
