<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_bar.php");

$datay=array(160,180,203,289,405,488,489,408,299,166,187,105);

//��������
$graph = new Graph(600,300,"auto");	
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20);

//����������Ӱ
$graph->SetShadow();

//������ʾ�����ҡ��ϡ��¾���ߵľ��룬��λΪ����
$graph->img->SetMargin(40,30,30,40);

//����һ�����εĶ���
$bplot = new BarPlot($datay);

//��������ͼ����ɫ
$bplot->SetFillColor('orange');	
//������ʾ����	
$bplot->value->Show();
//������ͼ����ʾ��ʽ����ͼ������
$bplot->value->SetFormat('%d');
//������ͼ��ӵ�ͼ����
$graph->Add($bplot);

//���û�������ɫΪ����ɫ
$graph->SetMarginColor("lightblue");

//��������
$graph->title->Set("��PHP�����ŵ���ͨ��2009������ͳ��");

//����X����������
$a=array("1��","2��","3��","4��","5��","6��","7��","8��","9��","10��","11��","12��");
$graph->xaxis->SetTickLabels($a); 

//��������
$graph->title->SetFont(FF_SIMSUN);
$graph->xaxis->SetFont(FF_SIMSUN); 

//�������ͼ��
$graph->Stroke();
?>

