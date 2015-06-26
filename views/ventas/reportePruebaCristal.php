<?php
/* en el php ini agregar 
[COM_DOT_NET]
extension=php_com_dotnet.dll
*/
?>

<?php 

// inicializo variables 
//$my_report = "C:\\rel_apontamento.rpt"; 
$my_report = "C:\\Users/jorgegc/Desktop/cristal php/ReportePrueba.rpt"; // Ruta fisica al reporte en el servidor 
$exp_pdf = "C:\\Users/jorgegc/Desktop/cristal php/ReportePrueba.pdf"; // ruta fisica donde se guardara el PDF resultado en el servidor 


$ObjectFactory = New COM("CrystalReports.ObjectFactory"); 
//$ObjectFactory = New COM("CrystalReportsObjectFactoryLib"); 
$crapp = $ObjectFactory->CreateObject("CrystalDesignRuntime.Application");
com_load_typelib('CrystalDesignRunTime.Application');


// Instancio el Object Factory de Crystal Reports 
//$ObjectFactory = New COM("CrystalReports11.ObjectFactory.1"); 
// Creo una instancia del Componente de Diseñador de Crystal Reports 
//$crapp = $ObjectFactory->CreateObject("CrystalDesignRuntime.Application"); 
// Mando abrir mi reporte 
$creport = $crapp->OpenReport($my_report, 1); 

//echo "<pre>"; print_r( com_print_typeinfo($creport)); echo "</pre>";
//exit;

//To turn off parameter prompting, set
//ReuseReportParametersOnRefresh to false on the CrystalReportVeiwer control


//$creport->Database->Tables->Item(1)->ConnectionProperties["User ID"] = "sa"; 
//$creport->Database->Tables->Item(1)->ConnectionProperties["Password"] = "S1stem@sxxxxx"; 

//$creport->Database->Tables(1)->SetLogOnInfo("servername", "DBname", "user", "password");
$creport->Database->Tables(1)->SetLogOnInfo("EMPRESAS", "EMPRESAS", "sa", "S1stem@s");


//—— Suppress the Parameter field prompt or else report will hang ——
$creport->EnableParameterPrompting = false;

//$creport->FormulaSyntax = 0; 
//$creport->DisplayProgressDialog = false;

//—— DiscardSavedData make a Refresh in your data ——-
$creport->DiscardSavedData;
$creport->ReadRecords();
//—— Pass formula fields ——–
//$creport->FormulaFields->Item(1)->Text = ("My Report Title");


//$creport->ParameterFields(1)->AddCurrentValue ("F");

$param = "P" ;
$creport->ParameterFields(1)->AddCurrentValue($param); 
$zz = $creport->ParameterFields(1)->SetCurrentValue($param); 



$creport->ExportOptions->DiskFileName=$exp_pdf;
$creport->ExportOptions->PDFExportAllPages=true;
$creport->ExportOptions->DestinationType=1; 
$creport->ExportOptions->FormatType=31;
$creport->Export(false);
$file_len = filesize($exp_pdf);
header("Content-type: application/pdf");
header("Content-Length: $file_len");
header("Content-Disposition: inline; filename=$exp_pdf");
readfile($exp_pdf);
$creport = null;
$crapp = null;
$ObjectFactory = null;

exit;






?> 


<?php 
/*
$ObjectFactory= New COM("CrystalReports11.ObjectFactory.1"); 
  $crapp = $ObjectFactory->CreateObject("CrystalDesignRunTime.Application"); 
  $creport = $crapp->OpenReport("//report1.rpt", 1); 

   
      //$z= $creport->ParameterFields(1)->SetCurrentValue("Mango"); 
      //$z= $creport->ParameterFields(2)->SetCurrentValue(5000); 

  $creport->ExportOptions->DiskFileName="reportin.pdf"; 
  $creport->ExportOptions->PDFExportAllPages=true; 
  $creport->ExportOptions->DestinationType=1;   $creport->ExportOptions->FormatType=31; 
  $creport->Export(false); 

$len = filesize("reportin.pdf"); 
header("Content-type: application/pdf"); 
header("Content-Length: $len"); 
header("Content-Disposition: inline; filename=reportin.pdf"); 
readfile("reportin.pdf"); 
*/
?>

<?php 
/*
//------  Variables ------ 
$my_report = "C:\\rel_apontamento.rpt"; 
$my_pdf = "C:\\teste.pdf"; 

//------ Create a new COM Object of Crytal Reports XI ------ 
$ObjectFactory= new COM("CrystalReports11.ObjectFactory.1"); 

//------ Create a instance of library Application ------- 
$crapp=$ObjectFactory->CreateObject("CrystalDesignRunTime.Application.11"); 
//------ Open your rpt file ------ 
$creport = $crapp->OpenReport($my_report, 1); 
//------ Connect to Oracle 9i DataBase ------ 
$crapp->LogOnServer('crdb_oracle.dll','YOUR_TNS','YOUR_TABLE','YOUR_LOGIN','YOUR_PASSWORD'); 

//------ Put the values that you want -------- 
$creport->RecordSelectionFormula="{YOUR_TABLE.FIELD}='ANY_VALUE'"; 

//------ This is very important. DiscardSavedData make a Refresh in your data ------- 
$creport->DiscardSavedData; 

//------ Read the records :-P ------- 
$creport->ReadRecords(); 

//------ Export to PDF ------- 
$creport->ExportOptions->DiskFileName=$my_pdf; 
$creport->ExportOptions->FormatType=31; 
$creport->ExportOptions->DestinationType=1; 
$creport->Export(false); 

//------ Release the variables 
$creport = null; 
$crapp = null; 
$ObjectFactory = null; 
*/
?> 


<?php
//C:\Users\jorgegc\Desktop\ReportePrueba.rpt
//$my_report = "C:\\rel_apontamento.rpt"; 
//$my_pdf = "C:\\teste.pdf"; 
//$my_report = "C:UsersXXXXDesktop/rep.rpt"; // Ruta fisica al reporte en el servidor 
//$exp_pdf = "C:UsersXXXXXDesktop/rep.pdf"; // ruta fisica donde se guardara el PDF resultado en el servidor 

/*
$ObjectFactory= new COM("CrystalReports11.ObjectFactory.1"); 
$crapp = $ObjectFactory->CreateObject("CrystalDesignRunTime.Application.11"); 

$ObjectFactory= New COM("CrystalReports11.ObjectFactory.1"); 
$crapp = $ObjectFactory->CreateObject("CrystalDesignRunTime.Application"); 

$ObjectFactory = New COM("CrystalReports.ObjectFactory"); 
$crapp = $ObjectFactory->CreateObject("CrystalDesignRuntime.Application");
*/
?>

//print_r( com_print_typeinfo($creport->Database->Tables(1)));
//exit;

//print_r( com_print_typeinfo($creport));
//exit;

//$creport->FormulaSyntax = 0; 
//$param = "'". 'c' ."'";

//$creport->ParameterFields(1)->AddCurrentValue($param); 
//$zz = $creport->ParameterFields(1)->SetCurrentValue($param); 


//$rptParams = $creport->ParameterFields;
//$rptParam = $rptParams->Item(1); 
//$t = $rptParam->ValueType;
//$t = $rptParam->Name;
//print_r($t);
//exit;

//$rptParam->SetCurrentValue("c");

//$creport->ParameterFields(1)->SetParameterValue("c"); 

//$x = $creport->ParameterFields(1)->Value("c");
//print_r($x->Value);
//exit;

/*
// This block is strictly guesswork
$application = new COM("CrystalRuntime.Application.9"); // Change to your version
$report = $application->OpenReport($my_report,1);       // From OP's code
$rptParams = $report.ParameterFields
$rptParam = $rptParams->Item(2);                        // From my SitePoint post; 
                                                        // obviously you need to use
                                                        // the right index

// Check that $rptParam->ValueType evaluates to 10 - if it does not
// then modify the type in Crystal Reports itself. Again, see my
// original solution

// This bit should be fine
$oScript = new COM("MSScriptControl.ScriptControl");
$oScript->Language = "VBScript";
$oScript->AllowUI = false;
$oScript->AddObject('rptParam', $rptParam, true);
$oScript->AddCode('Function SetDateParameter(strDate)
rptParam.AddCurrentValue(CDate(strDate))
End Function');
$oScript->Run("SetDateParameter", "25 April 2006");
*/


//$rptParam = "c";
//print_r($rptParam);
//exit;
//print_r($rptParams);

//exit;

//$creport->Database->Tables(1)->SetLogOnInfo("EMPRESAS", "empresas", "sa", "S1stem@s");
// Mi reporte tiene ODBC establecido, por lo cual unicamente le indico user y pass. 
//$creport->Database->Tables->Item(1)->ConnectionProperties["User ID"] = "sa"; 
//$creport->Database->Tables->Item(1)->ConnectionProperties["Password"] = "S1stem@s"; 





//$zz = $creport->ParameterFields(1)->SetCurrentValue("c");   


/*
// Utilizare una formula de selección de Registros 
//print_r( com_print_typeinfo($creport)); 
$creport->FormulaSyntax = 0; 
$param = "'".$_GET['n']."'"; // Valor de parametro, para este ejemplo estatico pero bien puedes leerlo de un $_POST[], $_GET[] o asignar un valor resultado de una consulta a BD 
*/
//Con Enable Parameter Promting evito que lanze el formulario de captura de parametros ya que el browser del usuario no puede interactuar con el escritorio o el componente que crea el formulario. 
//$creport->EnableParameterPrompting = 0; 

//$creport->ParameterFields(1)->AddCurrentValue("Mango"); 
//$z= $creport->ParameterFields(1)->SetCurrentValue("Mango"); 

//$p = "C" ;

//Inserto los valores en los campos de parametro del reporte 
//$creport->ParameterFields(1)->AddCurrentValue($p); 
//$zz = $creport->ParameterFields(1)->SetCurrentValue($p); 
//$creport->ParameterFields(2)->AddCurrentValue("'c'"); 
//$zz1 = $creport->ParameterFields(2)->SetCurrentValue("'c'"); 

//$creport->EnableParameterPrompting = 0;
//$creport->ParameterFields[0] = "@MODULO;c;1";
//$p = $creport->ParameterFields[1];
//print_r($p->Value);
//$p->Value = "'c'";
//exit;
//$creport->ParameterFields(1)->AddCurrentValue ("'c'");
//$creport->ParameterFields->Items[0]->CurrentValue = "'c'";
//$p = $creport->ParameterFields;
//print_r($creport->ParameterFields->Item[0]);







































$creport->DisplayProgressDialog = false;
$creport->EnableParameterPrompting = 0;
$creport->DiscardSavedData;
$creport->ReadRecords();
//$zz= $creport->ParameterFields(1)->SetCurrentValue("?@MODULO;'C';1");
$creport->ExportOptions->DiskFileName=$exp_pdf;
$creport->ExportOptions->PDFExportAllPages=true;
$creport->ExportOptions->DestinationType=1; 
$creport->ExportOptions->FormatType=31;
$creport->Export(false);
$file_len = filesize($exp_pdf);
header("Content-type: application/pdf");
header("Content-Length: $file_len");
header("Content-Disposition: inline; filename=$exp_pdf");
readfile($exp_pdf);
$creport = null;
$crapp = null;
$ObjectFactory = null;
exit;

//$creport->DisplayProgressDialog = false;
$creport->EnableParameterPrompting = false; 

// Run the report and save the PDF to disk.
$creport->ExportOptions->DiskFileName = $exp_pdf;
$creport->ExportOptions->PDFExportAllPages = true;
$creport->ExportOptions->DestinationType = 1; // Export to File
$creport->ExportOptions->FormatType = 31; // 31 = PDF, 36 = XLS, 14 = DOC

$p = '?@MODULO;c;1';
$creport->ParameterFields(1)->AddCurrentValue($p); 
$zz = $creport->ParameterFields(1)->SetCurrentValue($p); 
//$creport->ParameterFields[1]->AddCurrentValue ("?@MODULO;" . 'c' . ";1");
$creport->EnableParameterPrompting = false; 
//$creport->EnableParameterPrompting = 0; 

//$creport->SetParameterValue("@ID_SEMANA", "c");

$m_Stuff = new Variant();
$o_CrPeriodsParam = $creport->ParameterFields->GetItemByName('@MODULO', $m_Stuff);

print_r('valor =' . $o_CrPeriodsParam->Value); echo '<br>';
//exit;

//$o_CrPeriodsParam->ClearCurrentValueAndRange();
//$o_CrPeriodsParam->AddCurrentValue("c");

$creport->DiscardSavedData; 
$creport->ReadRecords(); 
$creport->Export(false); 

$m_Stuff2 = new Variant();
$o_CrPeriodsParam = $creport->ParameterFields->GetItemByName('@MODULO', $m_Stuff2);
print_r('valor =' . $o_CrPeriodsParam->Value);

exit;

//$creport->FormulaFields->Item(1)->Text = ("'c'");


$creport->ExportOptions->DiskFileName = $exp_pdf; 
$creport->ExportOptions->PDFExportAllPages = true; 
$creport->ExportOptions->DestinationType = 1; 
$creport->ExportOptions->FormatType = 31; 
// Exporto el reporte 
$creport->Export(false); 
// Limpio las variables 
$creport = null; 
$crapp = null; 
$ObjectFactory = null; 
// truco para leer el PDF resultado y enviarlo al navegador Web para descargar o abrir en el equipo del usuario 
$len = filesize($exp_pdf); 
header("Content-type: application/pdf"); 
header("Content-Length: $len"); 
header("Content-Disposition: attachment; filename=Descripcion.pdf"); 
// Con esto leeo el archivo para que en conjuncion con el envio de headers el navegador del cliente interprete el contenido del archivo. 
readfile($exp_pdf); 

//print "<embed src=\"adm_JumlahPasienPoli.pdf\" width=\"100%\" height=\"100%\">";

exit; 