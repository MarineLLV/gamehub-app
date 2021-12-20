<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
use \Illuminate\Support\Carbon;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;


        $popularGames = Http::withHeaders(config('services.igdb.headers'))
        ->withBody(
            "fields name, cover.url, first_release_date, platforms.abbreviation, rating,
            slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
            where platforms = (5,6,48,49,130)
            & (first_release_date >= {$before}
            & first_release_date < {$after});
            sort rating desc;
            limit 12;
            ", "text/plain"
        )->post('https://api.igdb.com/v4/games')
        ->json();

        //dump($popularGames);

        $recentlyReviewed = Http::withHeaders(config('services.igdb.headers'))
        ->withBody(
            "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count,
            slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
            where platforms = (5,6,48,49,130)
            & (first_release_date >= {$before}
            & first_release_date < {$current}
            & rating_count > 5);
            sort rating desc;
            limit 3;
            ", "text/plain"
        )->post('https://api.igdb.com/v4/games')
        ->json();

        //dump($recentlyReviewed);

        $mostAnticipated = Http::withHeaders(config('services.igdb.headers'))
        ->withBody(
            "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count,
            slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
            where platforms = (5,6,48,49,130)
            & (first_release_date >= {$current}
            & first_release_date < {$afterFourMonths}
            & rating_count > 5);
            sort rating desc;
            limit 4;
            ", "text/plain"
        )->post('https://api.igdb.com/v4/games')
        ->json();

        //dump($mostAnticipated);

        $comingSoon = Http::withHeaders(config('services.igdb.headers'))
        ->withBody(
            "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count,
            slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
            where platforms = (5,6,48,49,130)
            & (first_release_date >= {$current}
            & rating_count > 5);
            sort rating desc;
            limit 4;
            ", "text/plain"
        )->post('https://api.igdb.com/v4/games')
        ->json();

        //dump($comingSoon);


        return view('index', [
            'popularGames' => $popularGames,
            'recentlyReviewed' => $recentlyReviewed,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
