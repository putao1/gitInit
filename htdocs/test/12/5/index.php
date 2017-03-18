<?php
  		include ("jpgraph/jpgraph.php");
        include ("jpgraph/jpgraph_line.php");														//��������ͼLinePlot���ļ�
		$datay = array(8320,9360,14956,17028,13060,15376,25428,16216,28548,18632,22724,28460);		//��������   
        $graph = new Graph(600,300,"auto");								//��������
        $graph->img->SetMargin(50,40,30,40);    						//����ͳ��ͼ���ڻ�����λ�ã���߾�50���ұ߾�40���ϱ߾�30���±߾�40����λΪ����
        $graph->img->SetAntiAliasing();									//�������ߵ�ƽ��״̬
        $graph->SetScale("textlin");									//���ÿ̶���ʽ
        $graph->SetShadow();											//����������Ӱ
        $graph->title->Set("2009�꡶PHP�����ŵ���ͨ��ͼ�������۶�����ͼ");	//���ñ���
		$graph->title->SetFont(FF_SIMSUN,FS_BOLD);						//���ñ�������
        $graph->SetMarginColor("lightblue");							//���û����ı�����ɫΪ����ɫ
        $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);				//����Y����������
        $graph->xaxis->SetPos("min");
        $graph->yaxis->HideZeroLabel();
        $graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
        $a=array("1��","2��","3��","4��","5��","6��","7��","8��","9��","10��","11��","12��");			//X��
        $graph->xaxis->SetTickLabels($a); 								//����X��
        $graph->xaxis->SetFont(FF_SIMSUN); 								//����X�����������
        $graph->yscale->SetGrace(20); 
   
        $p1 = new LinePlot($datay);										//��������ͼ����
        $p1->mark->SetType(MARK_FILLEDCIRCLE);							//�������������ΪԲ�α��
        $p1->mark->SetFillColor("red");									//����������ɫ
        $p1->mark->SetWidth(4);											//����Բ�α�ǵ�ֱ��Ϊ4����
        $p1->SetColor("blue");											//����������ɫΪ��ɫ
        $p1->SetCenter();												//��X��ĸ����������λ�û�������
        $graph->Add($p1);												//��ͳ��ͼ�ϻ�������
        $graph->Stroke();												//���ͼ��
?>
