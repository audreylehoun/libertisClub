﻿<?php
session_start();

//---Deconnexion
if(isset($_GET['logout']))
{
unset($_SESSION["user_name"]);
unset($_SESSION["pass"]);
unset($_SESSION["groupe"]);
unset($_SESSION["user_article"]);
unset($_SESSION["id_articles"]);
unset($_SESSION['id_modif']);
}
//----Verification login
if(!isset($_SESSION["pseudousers"]))
{
   if(!isset($_SESSION["passwordusers"]))
	{
	   header("Location:../seconnecter/");
	}
}
?>