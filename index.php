<?php

// Model Identitys 
 require ('model/Identity.php');     
 $identity = getIdentitys();

  // <!-- Header Section -->
  require ('view/header.php'); 
      
  // <!-- ======= Hero Section ======= -->
  require ('view/hero.php'); 

  // <!-- ======= About Section ======= -->
  require ('view/about.php'); 

  // <!-- ======= Facts Section ======= -->
  require ('view/facts.php'); 

  // <!-- ======= Resume Section ======= -->
  require ('view/resume.php'); 

  // <!-- ======= Services Section ======= -->
  require ('view/services.php'); 

  // <!-- ======= Portfolio Section ======= -->
  require ('view/portfolio.php'); 

  // <!-- ======= Contact Section ======= -->
   require ('view/contact.php');

  // <!-- ======= Footer ======= -->
   require ('view/footer.php'); 

  // Database::disconnect();
