<?

	require_once '../../.lib_shared/php/dompdf/autoload.inc.php';
	
	
	// reference the Dompdf namespace
	use \Dompdf\Dompdf;


	ob_start();
	include "chart.html";
	$html = ob_get_clean();

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();
