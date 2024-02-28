<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->rating = $request->input('rating');
        $review->image = $request->file('image')->store('public/reviews');
        $review->isActive = '0';
        $review->save();
        Toast::title('Отзыв добавлен');
        return redirect()->route('client.fitback');
    }
}
