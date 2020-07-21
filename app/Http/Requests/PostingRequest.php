<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Auth;


class PostingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        //
            'photo'=>'required',
            'category_id'=>'required',
            'judul'=>'required',
            'harga'=>'required',
            'keterangan_khusus'=>'required',
            'deskripsi'=>'required',

        ];
    }
}
