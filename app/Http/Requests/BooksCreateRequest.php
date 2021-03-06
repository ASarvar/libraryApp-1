<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BooksCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'book_id'           => 'required',
            'book_author'       => 'required',
            'book_name'         => 'required',
            'book_published_at' => 'required',
            'photo_id'          => 'required',
            'ebook_id'          => 'required',
        ];
    }
}
