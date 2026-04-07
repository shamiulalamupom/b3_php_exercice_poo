
<?php
/*
 * ÉNONCÉ :
 * Créez une classe BlogPost avec les propriétés protected title, content, createdAt (de type DateTime).
 * Ajoutez les getters/setters 
 * Ajouter une méthode getExcerpt($length) qui retourne un extrait du contenu.
 * Instanciez un article, affichez son titre, sa date de création et un extrait de 50 caractères.
*/
class BlogPost {
    protected string $title;
    protected string $content;
    protected DateTime $createdAt;

    public function __construct(string $title, string $content, DateTime $createdAt)
    {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getExcerpt(int $length): string
    {
        return substr($this->content, 0, $length) . '...';
    }
}

$post = new BlogPost(
    "My First Blog Post",
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    new DateTime()
);

echo "Title: " . $post->getTitle() . "\n";
echo "Created At: " . $post->getCreatedAt()->format('Y-m-d H:i:s') . "\n";
echo "Excerpt: " . $post->getExcerpt(50) . "\n";