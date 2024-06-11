use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;


Route::get('/posts', function()) { 
    return response()=>json{(
        'posts' => {
            [
                'title' => 'Post One'
            ]
        }
    )}
}