<?php

namespace App\Controller;

use App\Repository\ParticipationRepository;
use Ob\HighchartsBundle\Highcharts\Highchart;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class StatController extends AbstractController
{
    /**
     * @Route("/stat", name="stat", methods={"GET"})
     */
    public function index(ChartBuilderInterface $chartBuilder,ParticipationRepository $p): Response
    {$chart = $chartBuilder->createChart(Chart::TYPE_PIE);
       
       $s=$p->nbPartByForm();
     $labels=[];
     $data=[];
    
  
       foreach($s as $s1)
{    
    
    array_push($labels,  array($s1['nomFormation'], $s1[1]));
    array_push($data,  $s1[1]);

   // $labels.array_push( $s1[$i]['nomFormation']);
  //  $data.array_push($s1[$i][$i+1]);
 
}
/*$series = array(
    array("name" => $labels,    "data" => $data)
);

$ob = new Highchart();

$ob->chart->renderTo('linechart');  
$ob->title->text('nbParticipantf(Formation)');
$ob->xAxis->title(array('text'  => "Formation"));
$ob->yAxis->title(array('text'  => "Nombre de participant"));

$ob->series($series);*/
$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Nombre de participant par formation');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));

$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $labels)));
return $this->render('stat/index.html.twig', array(
    'chart' => $ob
));



        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Formation!',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $data,
                ],
            ],
        ]);
      /*  return $this->render('stat/index.html.twig', [
            'data' =>  $data,
            'labels' =>  $labels,

        ]);*/
        
        
    }
}
