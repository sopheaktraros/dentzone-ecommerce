<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminNavigationDataTableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $status = $this->active===1?'<span class="text-success" style="font-weight: bold">Active</span>':'<span class="text-danger font-bold" style="font-weight: bold">Inactive</span>';

        $button ='';

        if ($request->user()->can('navigations','update')) {
            $button = '<a href="'.route('navigations.edit',encrypt($this->id)).'" id="btn-edit" class="btn-edit btn btn-primary btn-sm"
            data-toggle="tooltip" data-placement="left" title="Edit"><i class="far fa-edit"></i> </a>';
        }

        if ($request->user()->can('navigations','delete')) {
            $button .= '
            <form action="'.route('navigations.destroy',encrypt($this->id)).'" id="fm-role-delete'.$this->id.'" class="fm-delete" method="POST" novalidate>
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="DELETE">
                <button type="button" class="btn-delete btn btn-danger btn-sm"
                data-toggle="tooltip" data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></button>
            </form>';
        }
        $button = '<div class="btn-group-sm d-inline-flex">'.$button.'</div>';
        $parent = $this->parent!=null?$this->parent->name:'';
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'parent' => $parent,
            'type' => navigation_type($this->type),
            'status' => $status,
            'action' => $button
        ];
    }
}
