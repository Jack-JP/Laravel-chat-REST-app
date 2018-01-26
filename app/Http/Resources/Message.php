<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Message extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
          'id' => $this->id,
          'msg' => $this->msg,
          'user_id' => $this->user_id,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
        ];
    }
}
