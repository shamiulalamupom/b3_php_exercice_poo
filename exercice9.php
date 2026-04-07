<?php
/*
 * ÉNONCÉ :
 * Créez une classe MusicAlbum avec les propriétés title, artist et tracks (tableau).
 * Ajoutez les getters/setters et une méthode addTrack() pour ajouter un morceau.
 * Ajoutez une méthode displayAlbum() qui affiche les infos et la liste des morceaux.
 * Instanciez un album, ajoutez des morceaux et affichez l'album.
*/
class MusicAlbum {
    protected string $title;
    protected string $artist;
    protected array $tracks = [];

    public function __construct(string $title, string $artist)
    {
        $this->title = $title;
        $this->artist = $artist;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

    public function addTrack(string $track): void
    {
        $this->tracks[] = $track;
    }

    public function displayAlbum(): void
    {
        echo "Album: " . $this->title . "<br>";
        echo "Artist: " . $this->artist . "<br>";
        echo "Tracks:<br>";
        foreach ($this->tracks as $index => $track) {
            echo ($index + 1) . ". " . $track . "<br>";
        }
    }
}

$album = new MusicAlbum("Thriller", "Michael Jackson");
$album->addTrack("Wanna Be Startin' Somethin'");
$album->addTrack("Baby Be Mine");
$album->addTrack("The Smooth Criminal");
$album->displayAlbum();