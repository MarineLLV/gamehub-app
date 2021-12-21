<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon(){
        $current = Carbon::now()->timestamp;

        $comingSoonUnformatted = Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6,5)
                    & (first_release_date >= {$current}
                    );
                    sort first_release_date asc;
                    limit 4;
                ", "text/plain"
            )->post('https://api.igdb.com/v4/games')
            ->json();

            $this->comingSoon = $this->formatForView($comingSoonUnformatted);

    }

    public function render()
    {
        return view('livewire.coming-soon');
    }

    private function formatForView($games){
        return collect($games)->map(function ($game){
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']),
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('M d, Y')
            ]);
        })->toArray();
    }

}
