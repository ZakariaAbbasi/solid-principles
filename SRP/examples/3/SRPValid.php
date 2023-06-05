<?php


class BlogPost
{
    private Author $author;
    private string $title;
    private string $content;
    private \DateTime $date;

    // ..

    public function getData(): array
    {
        return [
            'author' => $this->author->fullName(),
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }
}


interface PrintableInterface
{
    public function print(BlogPost $blogPost);
}

class JsonBlogPostPrinter implements PrintableInterface
{
    public function print(BlogPost $blogPost) {
        return json_encode($blogPost->getData());
    }
}

class HtmlBlogPostPrinter implements PrintableInterface
{
    public function print(BlogPost $blogPost) {
        return `<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <p>{$blogPost->getDate()->format('Y-m-d H:i:s')}</p>
                        <p>{$blogPost->getAuthor()->fullName()}</p>
                        <p>{$blogPost->getContent()}</p>
                    </article>
                </article>`;
    }
}