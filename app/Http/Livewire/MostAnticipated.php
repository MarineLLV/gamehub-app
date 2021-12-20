<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class MostAnticipated extends Component
{

    public function loadMostAnticipated()
    {

        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, rating_count, summary, slug;
            where platforms = (48,49,130,6,5)
            & (first_release_date >= {$current}
            & first_release_date < {$afterFourMonths}
        );
        sort total_rating_count desc;
        limit 4;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')
            ->json();
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}