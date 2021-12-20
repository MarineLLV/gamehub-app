<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class ComingSoon extends Component
{

    public function loadComingSoon(){
        $current = Carbon::now()->timestamp;

        $this->comingSoon = Http::withHeaders(config('services.igdb.headers'))
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
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
