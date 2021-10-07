<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CornellController extends AbstractController
{
    public string $rawDocument;
    public array $chunks; // same document but broken up into chunks
    public array $QsAndAs; // 2D array of [[,], [,], ...]
    private int $sizeOfRaw;
    public int $chunksCount; // How many lines are there

    /**
     * 
     */
    public function __construct(string $s = '')
    {
        $this->rawDocument = $s;
        $this->sizeOfRaw = strlen($this->rawDocument);
    }

    public static function fromString(string $s): self
    {
        return new self($s);
    }

    public function rawToChunked(): void
    {
        $this->chunks = ["Moe, ", "Larry, ", "The Cheese."];
        $this->chunksCount = sizeof($this->chunks);
    }

    public function makeBlanks(): void
    {

    }
    public function addQuestion(): void
    {}
    public function addAnswer(): void
    {}

}