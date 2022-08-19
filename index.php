<?php

include "class/Node.php";
include "class/Sequence.php";
include "class/Stack.php";
include "class/Queue.php";
include "class/Graph.php";

/**
 * Stack algorithm [First In Last Out]
 */
$stack = new Stack();
$stack->put('Pavel [STACK]');
$stack->put('Nastay [STACK]');
$stack->put('Localhost [STACK]');

echo $stack->get() . ",\t";
echo $stack->get() . ",\t";
echo $stack->get() . "\t";
echo "\n";

/**
 * Queue algorithm [First In First Out]
 */
$queue = new Queue();
$queue->put('Pavel1 [QUEUE]');
$queue->put('Anastasia2 [QUEUE]');
$queue->put('Localhost3 [QUEUE]');

//echo $queue->get() . "\n";
//echo $queue->get() . "\n";
//echo $queue->get() . "\n";

foreach ($queue->getList() as $item)
{
    echo $item . "\n";
}

$graph = new Graph();
$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');
$graph->addNode('D');
$graph->addNode('E');
$graph->addNode('F');
$graph->addNode('G');

$graph->addEdges('A', 'B', 2);
$graph->addEdges('A', 'C', 3);
$graph->addEdges('A', 'D', 6);
$graph->addEdges('B', 'C', 4);
$graph->addEdges('B', 'E', 9);
$graph->addEdges('C', 'D', 1);
$graph->addEdges('C', 'E', 7);
$graph->addEdges('C', 'F', 6);
$graph->addEdges('D', 'F', 4);
$graph->addEdges('E', 'F', 1);
$graph->addEdges('E', 'G', 5);
$graph->addEdges('F', 'G', 8);

foreach ($graph->getNodes() as $node)
    echo $node . "\n";

$node1 = 'A';
foreach ($graph->getEdges($node1) as $node2 => $length)
    echo $node1 . " => " . $node2 . " | length: $length\t";