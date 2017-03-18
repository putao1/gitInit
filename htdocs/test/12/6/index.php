<?php
include_once ("jpgraph/jpgraph.php");
include_once ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");			//����3D��ͼPiePlot3D�������ڵ����ļ�

$data = array(266036,295621,335851,254256,254254,685425);			//��������
$graph = new PieGraph(540,260,'auto');				//��������
$graph->SetShadow();								//���û�����Ӱ

$graph->title->Set("Ӧ��3D����ͼͳ��2009����Ʒ�������۶����");			//��������
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);			//���ñ�������
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);			//����ͼ������

$p1 = new PiePlot3D($data);							//����3D����ͼ����
$p1->SetLegends(array("IT����","�ҵ�ͨѶ","�Ҿ�����","��װЬñ","��������","ʳƷ�̾�"));
$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3",
			"pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p1->SetCSIMTargets($targ,$alts);

$p1->SetCenter(0.4,0.5);					//���ñ���ͼ���ڻ�����λ��
$graph->Add($p1);							//��3D��ͼ����ӵ�ͼ����
$graph->StrokeCSIM();						//���ͼ�������

?>

