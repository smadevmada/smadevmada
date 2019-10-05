<?php
/**
 * @var : nom, email, objet, message
 */

class MailContact
{
	private $nom;
	private $destinataire;
	private $objet;
	private $message;

	public function add_nom($nom)
	{
		$this->nom = $nom;
	}

	public function add_destinataire($dest)
	{
		$this->destinataire = $dest;
	}

	public function add_objet($objet)
	{
		$this->objet = $objet;
	}

	public function add_message($message)
	{
		$this->message = $message;
	}

	public function envoie()
	{
		$template = '
			<div style="padding: 2% 1% 2% 1%; margin: auto; background-color: #f4f4f4">
			<div class="body" style="font-size:16px; font-family: Arial, Helvetica, \'sans-serif\' !important";>
			    <style type="text/css">
			  		.body { -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
			  		table td { border-collaspse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin:0; padding:0; }
			  		img { margin:0; padding:0; }
			  		@media only screen and (max-width: 3000px), (max-device-width: 3000px) {
			  			*[class~=general] { width:640px!important; }
			  			*[class~=p_desktop] { padding-left: 5px!important; padding-right: 5px!important; }
			  		}

			  		@media only screen and (max-width: 700px), (max-device-width: 700px) {
			  			*[class~=general] { width:100% !important; }
			  			*[class~=p_desktop] { padding-left: 0!important; padding-right: 0!important; }
			  			
			  			*[class~=resize320] {
			  				width:auto !important;
			  				height:auto!important;
			  			}
			  			*[class~=resize270] {
			  				width:84.375% !important;
			  				height:auto!important;
			  			}

			  			*[class~=w320] { width:100% !important; }
			  			*[class~=w318] { width:99.375% !important; }
			  			*[class~=w310] { width:96.875% !important; }
			  			*[class~=w300] { width:93.75% !important; }
			  			*[class~=w280] { width:87.5% !important; }
			  			*[class~=w40] { width:12.5% !important; }
			  			*[class~=w20] { width:6.25% !important; }
			  			*[class~=w10] { width:3.125 !important; }

			  			*[class~=h19] { height:19px!important; }

			  			*[class~=p0] { padding:0!important; }

			  			*[class~=m0] { padding:0!important; }

			  			*[class~=f22] { font-size:22px!important; }
			  			*[class~=fcenter] { text-align:center!important; }
			  			*[class~=center] { margin:0 auto!important; }
			  			*[class~=none] { display:none; }
			  			*[class~=show] { display:block !important; margin: 0 auto; padding:0; overflow : visible !important; max-height:inherit !important; }
			  		}
				</style>
			    <center>
			        <table bgcolor="#f4f4f4" border="0" cellpadding="0" cellspacing="0" width="100%">
			          <tbody>
			            <tr>
			              <td align="center" bgcolor="#f4f4f4">
			                <table style="width:100%; Max-Width:640px;" class="general" border="0" cellpadding="0" cellspacing="0">
			                  <tbody>
			                    <tr>
			                      <td>
			                        <table class="w320" align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
			                          <tbody>
			                            <tr>
			                              <td>
			                                <img moz-do-not-send="true" src="http://'.$_SERVER['HTTP_HOST'].'/smadev/img/fond-smadev.jpg" style="height:auto; display:block; border:0; margin: auto; margin-top: 3%; margin-bottom: 3%;" class="resize320" height="auto" width="30%"></a>
			                               </td>
			                            </tr>
			                            <tr>
			                              <td style="font-family: Arial, Helvetica, \'sans-serif\'; font-weight: bold"; align="center">
			                                  <div style="box-sizing: border-box; border-radius: 25px; margin:0 10% 0 10%; padding: 3% 3% 3% 3%; font-size:20px; color:#f8ae01;">'.$this->objet.'</div>
			                                </p>
			                              </td>
			                            </tr>
			                            <tr>
	                                      <td style="font-family: Arial, Helvetica, "sans-serif";">
	                                      	<div style="text-align: justify; color:#5e5e5e; box-sizing: box-border; padding: 0; margin-left: 10%; margin-right: 10%;"><p style="margin-left:7%;">Bonjour <b>SMADEV</b>,
	                                      	</div>
	                                      </td>
			                            </tr>
			                            <tr>
			                              <td width: 100%; height: 30px;">
											<div style="text-align: justify; color:#5e5e5e; padding: 0; margin-left: 10%; margin-right: 10%;">
												<p style="color: #5e5e5e; margin-left: 7%">
													Vous avez reçu un nouveau message de la part de <b>'.$this->nom.'</b> ce '.date("d-m-Y").'<br><br> Voici le message :<br>
													<div style="width: 350px;height: auto;margin: auto;background: #f5f5f5;padding: 15px;box-sizing: border-box;border-radius: 5px;color: #777;">'.$this->message.'<br><br><b>Email : </b>'.$this->destinataire.'</div>
												</p>
											</div>
			                              </td>
			                            </tr>
			                            <tr>
			                              <td style="height:30px;" height="30">
			                              	<div style="color: #5e5e5e; box-sizing: box-border; margin-left: 10%; margin-right: 10%; padding-left:5%;">
			                              	<br>Cordialement.<br><br><br>
			                              	</div>
			                              </td>
			                            </tr>
			                          </tbody>
			                        </table>
			                      </td>
			                    </tr>
			                  </tbody>
			                </table>
			              </td>
			            </tr>
			          </tbody>
			        </table>
			    </center>
			</div>
			<div>
		';
		echo $template;
		$headers = 	"MIME-Version: 1.0"."\n"
					."Content-type: text/html; charset=UTF-8"."\n"
					."Content-Transfer-Encoding: 8bit"."\n"
					."From: no-reply@smadev.com"."\n"
					."Reply-To: no-reply@smadev.com"."\n";
		// mail($this->destinataire, $this->objet, $this->message, $headers);
	}
	
	/*
	function __construct(argument)
	{
	}*/
}
?>
