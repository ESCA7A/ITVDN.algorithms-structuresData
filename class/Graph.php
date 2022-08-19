<?php

class Graph
{
    /** @var array
     * матрица смежности вершин :
     * $edges['A']['B'] = N ( = 12 for example)
     * $edges['B']['A'] = N (12)
     */
    private array $edges;

    public function __construct()
    {
        $this->edges = [];
    }

    public function addNode(string $node)
    {
        $this->edges[$node] = [];
    }

    public function addEdges(string $node1, string $node2, string $length)
    {
        $this->edges[$node1][$node2] = $length;
        $this->edges[$node2][$node1] = $length;
    }

    public function getNodes() : iterable
    {
        foreach ($this->edges as $node => $edge)
            yield $node;
    }

    public function getEdges(string $node1) : iterable
    {
        foreach ($this->edges[$node1] as $node2 => $length)
            yield $node2 => $length;
    }
}