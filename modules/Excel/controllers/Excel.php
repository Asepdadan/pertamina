<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends MX_Controller {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->murl = '/modules/'.$this->uri->segment(1).'/';
        }

        public function index(){
            $this->load->view('vmain');
        }
        
	public function excel1()
	{
            //load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("PHPExcel/PHPExcel");
 
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'Hello')
                                        ->setCellValue('B2', 'Ini')
                                        ->setCellValue('C1', 'Excel')
                                        ->setCellValue('D2', 'Pertamaku');
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Excel Pertama');
 
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="hasilExcel.xlsx"');
            //unduh file
            $objWriter->save("php://output");
 
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
	}
        
        public function excel2()
	{
            //load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("PHPExcel/PHPExcel");
 
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0)
                    //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                    //Hello merupakan isinya
                                        ->setCellValue('A1', 'Hello')
                                        ->setCellValue('B2', 'Ini')
                                        ->setCellValue('C1', 'Excel')
                                        ->setCellValue('D2', 'Pertamaku');
            //set title pada sheet (me rename nama sheet)
            $objPHPExcel->getActiveSheet()->setTitle('Excel Pertama');
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Invoice');
            $objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel( gmmktime(0,0,0,date('m'),date('d'),date('Y')) ));
            $objPHPExcel->getActiveSheet()->getStyle('D1')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX15);
            $objPHPExcel->getActiveSheet()->setCellValue('E1', '#12566');

            $objPHPExcel->getActiveSheet()->setCellValue('A3', 'Product Id');
            $objPHPExcel->getActiveSheet()->setCellValue('B3', 'Description');
            $objPHPExcel->getActiveSheet()->setCellValue('C3', 'Price');
            $objPHPExcel->getActiveSheet()->setCellValue('D3', 'Amount');
            $objPHPExcel->getActiveSheet()->setCellValue('E3', 'Total');

            $objPHPExcel->getActiveSheet()->setCellValue('A4', '1001');
            $objPHPExcel->getActiveSheet()->setCellValue('B4', 'PHP for dummies');
            $objPHPExcel->getActiveSheet()->setCellValue('C4', '20');
            $objPHPExcel->getActiveSheet()->setCellValue('D4', '1');
            $objPHPExcel->getActiveSheet()->setCellValue('E4', '=IF(D4<>"",C4*D4,"")');

            $objPHPExcel->getActiveSheet()->setCellValue('A5', '1012');
            $objPHPExcel->getActiveSheet()->setCellValue('B5', 'OpenXML for dummies');
            $objPHPExcel->getActiveSheet()->setCellValue('C5', '22');
            $objPHPExcel->getActiveSheet()->setCellValue('D5', '2');
            $objPHPExcel->getActiveSheet()->setCellValue('E5', '=IF(D5<>"",C5*D5,"")');

            $objPHPExcel->getActiveSheet()->setCellValue('E6', '=IF(D6<>"",C6*D6,"")');
            $objPHPExcel->getActiveSheet()->setCellValue('E7', '=IF(D7<>"",C7*D7,"")');
            $objPHPExcel->getActiveSheet()->setCellValue('E8', '=IF(D8<>"",C8*D8,"")');
            $objPHPExcel->getActiveSheet()->setCellValue('E9', '=IF(D9<>"",C9*D9,"")');

            $objPHPExcel->getActiveSheet()->setCellValue('D11', 'Total excl.:');
            $objPHPExcel->getActiveSheet()->setCellValue('E11', '=SUM(E4:E9)');

            $objPHPExcel->getActiveSheet()->setCellValue('D12', 'VAT:');
            $objPHPExcel->getActiveSheet()->setCellValue('E12', '=E11*0.21');

            $objPHPExcel->getActiveSheet()->setCellValue('D13', 'Total incl.:');
            $objPHPExcel->getActiveSheet()->setCellValue('E13', '=E11+E12');
            
            $objPHPExcel->getActiveSheet()->getComment('E11')->setAuthor('PHPExcel');
            $objCommentRichText = $objPHPExcel->getActiveSheet()->getComment('E11')->getText()->createTextRun('PHPExcel:');
            $objCommentRichText->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getComment('E11')->getText()->createTextRun("\r\n");
            $objPHPExcel->getActiveSheet()->getComment('E11')->getText()->createTextRun('Total amount on the current invoice, excluding VAT.');

            $objPHPExcel->getActiveSheet()->getComment('E12')->setAuthor('PHPExcel');
            $objCommentRichText = $objPHPExcel->getActiveSheet()->getComment('E12')->getText()->createTextRun('PHPExcel:');
            $objCommentRichText->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getComment('E12')->getText()->createTextRun("\r\n");
            $objPHPExcel->getActiveSheet()->getComment('E12')->getText()->createTextRun('Total amount of VAT on the current invoice.');

            $objPHPExcel->getActiveSheet()->getComment('E13')->setAuthor('PHPExcel');
            $objCommentRichText = $objPHPExcel->getActiveSheet()->getComment('E13')->getText()->createTextRun('PHPExcel:');
            $objCommentRichText->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getComment('E13')->getText()->createTextRun("\r\n");
            $objPHPExcel->getActiveSheet()->getComment('E13')->getText()->createTextRun('Total amount on the current invoice, including VAT.');
            $objPHPExcel->getActiveSheet()->getComment('E13')->setWidth('100pt');
            $objPHPExcel->getActiveSheet()->getComment('E13')->setHeight('100pt');
            $objPHPExcel->getActiveSheet()->getComment('E13')->setMarginLeft('150pt');
            $objPHPExcel->getActiveSheet()->getComment('E13')->getFillColor()->setRGB('EEEEEE');

            $objRichText = new PHPExcel_RichText();
            $objRichText->createText('This invoice is ');

            $objPayable = $objRichText->createTextRun('payable within thirty days after the end of the month');
            $objPayable->getFont()->setBold(true);
            $objPayable->getFont()->setItalic(true);
            $objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );

            $objRichText->createText(', unless specified otherwise on the invoice.');

            $objPHPExcel->getActiveSheet()->getCell('A18')->setValue($objRichText);
            
            
            $objPHPExcel->getActiveSheet()->mergeCells('A18:E22');
            $objPHPExcel->getActiveSheet()->mergeCells('A28:B28');		// Just to test...
            $objPHPExcel->getActiveSheet()->unmergeCells('A28:B28');	// Just to test...
            
            $objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);	// Needs to be set to true in order to enable any worksheet protection!
            $objPHPExcel->getActiveSheet()->protectCells('A3:E13', 'PHPExcel');
            
            $objPHPExcel->getActiveSheet()->getStyle('E4:E13')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);
            
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
            $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
            $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(12);

            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setName('Candara');
            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setSize(20);
            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
            $objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

            $objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
            $objPHPExcel->getActiveSheet()->getStyle('E1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);

            $objPHPExcel->getActiveSheet()->getStyle('D13')->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyle('E13')->getFont()->setBold(true);
            
            
            $objPHPExcel->getActiveSheet()->getStyle('D11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $objPHPExcel->getActiveSheet()->getStyle('D12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $objPHPExcel->getActiveSheet()->getStyle('D13')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

            $objPHPExcel->getActiveSheet()->getStyle('A18')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
            $objPHPExcel->getActiveSheet()->getStyle('A18')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

            $objPHPExcel->getActiveSheet()->getStyle('B5')->getAlignment()->setShrinkToFit(true);
            
            
            $styleThinBlackBorderOutline = array(
                    'borders' => array(
                            'outline' => array(
                                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                                    'color' => array('argb' => 'FF000000'),
                            ),
                    ),
            );
            $objPHPExcel->getActiveSheet()->getStyle('A4:E10')->applyFromArray($styleThinBlackBorderOutline);
            
            
            $styleThickBrownBorderOutline = array(
                    'borders' => array(
                            'outline' => array(
                                    'style' => PHPExcel_Style_Border::BORDER_THICK,
                                    'color' => array('argb' => 'FF993300'),
                            ),
                    ),
            );
            $objPHPExcel->getActiveSheet()->getStyle('D13:E13')->applyFromArray($styleThickBrownBorderOutline);
            
            $objPHPExcel->getActiveSheet()->getStyle('A1:E1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getActiveSheet()->getStyle('A1:E1')->getFill()->getStartColor()->setARGB('FF808080');

            $objPHPExcel->getActiveSheet()->getStyle('A3:E3')->applyFromArray(
		array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
			),
			'borders' => array(
				'top'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN
 				)
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFFFFFFF'
	 			)
	 		)
		)
            );

            $objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray(
                            array(
                                    'alignment' => array(
                                            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                                    ),
                                    'borders' => array(
                                            'left'     => array(
                                                    'style' => PHPExcel_Style_Border::BORDER_THIN
                                            )
                                    )
                            )
            );

            $objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray(
                            array(
                                    'alignment' => array(
                                            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                                    )
                            )
            );

            $objPHPExcel->getActiveSheet()->getStyle('E3')->applyFromArray(
                            array(
                                    'borders' => array(
                                            'right'     => array(
                                                    'style' => PHPExcel_Style_Border::BORDER_THIN
                                            )
                                    )
                            )
            );

            $objPHPExcel->getActiveSheet()->getStyle('B1')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
            
            $objPHPExcel->getActiveSheet()->setCellValue('E26', 'www.phpexcel.net');
            $objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setUrl('http://www.phpexcel.net');
            $objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setTooltip('Navigate to website');
            $objPHPExcel->getActiveSheet()->getStyle('E26')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

            $objPHPExcel->getActiveSheet()->setCellValue('E27', 'Terms and conditions');
            $objPHPExcel->getActiveSheet()->getCell('E27')->getHyperlink()->setUrl("sheet://'Terms and conditions'!A1");
            $objPHPExcel->getActiveSheet()->getCell('E27')->getHyperlink()->setTooltip('Review terms and conditions');
            $objPHPExcel->getActiveSheet()->getStyle('E27')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('Paid');
            $objDrawing->setDescription('Paid');
            $objDrawing->setPath('modules/Excel/Images/officelogo.jpg');
            $objDrawing->setHeight(36);
            $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
            
            $objDrawing1 = new PHPExcel_Worksheet_Drawing();
            $objDrawing1->setName('Paid');
            $objDrawing1->setDescription('Paid');
            $objDrawing1->setPath('modules/Excel/Images/paid.png');
            $objDrawing1->setCoordinates('B15');
            $objDrawing1->setOffsetX(110);
            $objDrawing1->setRotation(25);
            $objDrawing1->getShadow()->setVisible(true);
            $objDrawing1->getShadow()->setDirection(45);
            $objDrawing1->setWorksheet($objPHPExcel->getActiveSheet());
            
            $objDrawing2 = new PHPExcel_Worksheet_Drawing();
            $objDrawing2->setName('PHPExcel logo');
            $objDrawing2->setDescription('PHPExcel logo');
            $objDrawing2->setPath('modules/Excel/Images/phpexcel_logo.gif');
            $objDrawing2->setHeight(36);
            $objDrawing2->setCoordinates('D24');
            $objDrawing2->setOffsetX(10);
            $objDrawing2->setWorksheet($objPHPExcel->getActiveSheet());
            
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="hasilExcel.xlsx"');
            //unduh file
            $objWriter->save("php://output");
 
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
	}

    public function excel3(){
         //load librarynya terlebih dahulu
            //jika digunakan terus menerus lebih baik load ini ditaruh di auto load
            $this->load->library("PHPExcel/PHPExcel");
 
            //membuat objek PHPExcel
            $objPHPExcel = new PHPExcel();
 
            //set Sheet yang akan diolah 
            $objPHPExcel->setActiveSheetIndex(0);

            $query = $this->db->query("select title,special_features,last_update from film");
           
             // Field names in the first row
            $fields = $query->list_fields();
            $col = 3;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 3, $field);
                $col++;
            }
     
            // Fetching the table data
            $row = 4;
            foreach($query->result() as $data)
            {
                $col = 3;
                foreach ($fields as $field)
                {
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                    $col++;
                }
     
                $row++;
            }

            $objPHPExcel->getActiveSheet()->getStyle('D3:F3')->applyFromArray(
            array(
            'font'    => array(
                'bold'      => true
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
            ),
            'borders' => array(
                'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            ),
            'fill' => array(
                'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                'rotation'   => 90,
                'startcolor' => array(
                    'argb' => 'FFA0A0A0'
                ),
                'endcolor'   => array(
                    'argb' => 'FFFFFFFF'
                )
            )
        )
            );


                      
            
            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            
            //sesuaikan headernya 
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
            header('Content-Disposition: attachment;filename="hasilExcel.xlsx"');
            //unduh file
            $objWriter->save("php://output");
 
            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu   

    
    }
        
}
