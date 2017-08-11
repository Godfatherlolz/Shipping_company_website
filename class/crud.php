<?php

include_once ("config.php");


class crud{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	function insertProduit($book,$conn){


		$req1="INSERT INTO product (title,author,description,price,categoryID,quantity,image,summary)
		VALUES ('".$book->getTitle()."',".$book->getAuthor().",'".$book->getDescription().
		"',".$book->getPrice().",".$book->getCategory().",".$book->getQuantity().",'".$book->getImage()."','".$book->getSummary()."')";


		$conn->query($req1);
		return true;

	}
	function insertCategory($cat,$conn){


		$req1="INSERT INTO category (name)
		VALUES ('".$cat->getName()."')";


		if($conn->query($req1)){

		return true;
		}
	}
	function updateCategory($cat,$id,$conn){


		$query= " update  category set name = '".$cat->getName()."'
		where id=".$id;


		if($conn->query($query)){

		return true;
		}
	}



function insertAuthor($cat,$conn){


		$req1="INSERT INTO author (name)
		VALUES ('".$cat->getName()."')";


		if($conn->query($req1)){

		return true;
		}
	}
	function updateAuthor($auth,$id,$conn){


		$query= " update  author set name = '".$auth->getName()."'
		where id=".$id;


		if($conn->query($query)){

		return true;
		}
	}

	function afficheCategory($conn){
		$req= "select * from category";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}



function updateProduit($conn,$book,$id){

		$query= " update  product set
		title ='".$book->getTitle()."',
		author = '".$book->getAuthor()."',
		description = '".$book->getDescription()."',
		price = ".$book->getPrice().",
		categoryID = ".$book->getCategory().",
		summary = '".$book->getSummary()."',
		quantity = ".$book->getQuantity().",
		image = '".$book->getImage()."'

		where id= ".$id;

		if($conn->query($query)){
			return true;
		}


	}

	function afficheProduit($conn){
		$req="SELECT product.* ,author.name FROM product INNER JOIN author on product.author = author.id
		 ORDER BY `id` DESC LIMIT 3 ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

	function afficheToutProduit($conn){
		$req="SELECT product.* ,author.name FROM product INNER JOIN author on product.author = author.id ORDER BY `id` DESC ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}
	function afficheProduitWithCategory($conn){
		$req="select product.*, category.name , author.name from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
		order by product.id desc		";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}
	function supprimerProduit($id,$conn){
		$req1="delete from product where id=".$id;

		if($conn->exec($req1)){
return true;

		}


	}




	function CountProduit($conn){

		$req="SELECT COUNT(*) FROM product";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function afficheProduitPagination($conn,$depart,$BooksParPage)
	{

		$req='select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
		order by product.id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}







	function afficheProduitPaginationParCategory($conn,$id)
	{

		$req='select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
	where product.categoryID = '.$id.'
		order by product.id desc ';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function afficheProduitPaginationParAuthor($conn,$id)
	{

		$req='select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
	where product.author = '.$id.'
		order by product.id desc ';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

		function afficheProduitPaginationParTitle($conn,$id)
	{

		$req="select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
	where product.title like '%$id%' or category.name like '%$id%' or author.name like '%$id%'
		order by product.id desc ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}







	function afficheProduitSearchPagination($conn,$title,$category,$depart,$BooksParPage)
	{




		$req="select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
	and product.title like '%$title%' and category.name like  '%$category%' or author.name like '%$title%'  ".
		'order by product.id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();


	}



	function rechercheProduit($conn,$id){

		$req="select product.*, category.name , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id

		 where product.id = ".$id;
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

		function rechercheCategory($conn,$id){

		$req="select * from category where id = ".$id;
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function rechercheProduitWithCat($conn,$cat){

		$req="select * from product where categoryID ='$cat'";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	///********** category *****************////

	function CountCategory($conn){

		$req="SELECT COUNT(*) FROM category";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


	function afficheCategoryPagination($conn,$depart,$BooksParPage)
	{

		$req='select * from category
		order by id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


		function supprimerCategory($id,$conn){
		$req1="delete from category where id=".$id;

		$conn->exec($req1);

	}


function rechercheategory($conn,$id){

		$req="select * from category where name like '%$id%' ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


	////////////// side bar //////////////
	//////////////////////////////////////




function CountCat($conn,$nomCat)
	{

		$req="SELECT COUNT(*) FROM  product INNER JOIN category
	where product.categoryID = category.id and  category.name like '$nomCat' ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


function lastReviewbook($conn)
	{

		$req="SELECT  product.id,product.title , reviews.* FROM  product INNER JOIN
		 reviews
	where product.id = reviews.idproduct ORDER BY reviews.id DESC LIMIT 2 ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}




	////////////// Reviews //////////////
	//////////////////////////////////////



function insertReview($book,$conn){

		$req1="INSERT INTO reviews (idproduct,name,summary,review,rating)
		VALUES (:id , :name , :summary , :review , :rating)";
		$sqlprep=$conn->prepare($req1);

 $sqlprep->bindValue(':id', $book->getId_product(), PDO::PARAM_INT);
 $sqlprep->bindValue(':name', $book->getName(), PDO::PARAM_STR);
 $sqlprep->bindValue(':summary', $book->getSummary(), PDO::PARAM_STR);
 $sqlprep->bindValue(':review', $book->getReview(), PDO::PARAM_STR);
 $sqlprep->bindValue(':rating', $book->getRating(), PDO::PARAM_INT);


		if($sqlprep->execute()){

			return true ;
		}



	}


		function afficheReview($conn,$id){
		$req="SELECT * FROM reviews where idproduct ='$id' ORDER BY `id` DESC ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

	///////////////////Author /////////////////////



	function afficheLastAuthor($conn){
		$req= "SELECT * FROM author
ORDER BY id DESC
LIMIT 1 ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}


	function afficheLastAuthorBook($conn,$id){
		$req= "SELECT * FROM product
		where author = '$id'
ORDER BY id DESC
LIMIT 4 ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

	function afficheLastAuthorBook1($conn,$id){
		$req= "SELECT * FROM product
		where author = '$id'
ORDER BY id DESC
LIMIT 1 ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}


	function supprimerAuthor($id,$conn){
		$req1="delete from author where id=".$id;

		$conn->exec($req1);

	}

		function CountAuthor($conn){

		$req="SELECT COUNT(*) FROM author";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function afficheAuthorPagination($conn,$depart,$BooksParPage)
	{

		$req='select * from author
		order by id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


	function afficheAuthor($conn){
		$req= "select * from author";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

	function rechercheAuthor($conn,$id){

		$req="select * from author where name like '%$id%'";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function rechercheAuthoredit($conn,$id){

		$req="select * from author where id='$id'";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}




	//////////////// algo rating /////////////////



function NbStar1($conn,$id){



			$query= " select count(*) from reviews where idproduct='$id' and rating=1 ";

		$rat1=$conn->query($query);
		 return $rat1->fetchAll();
}

function NbStar2($conn,$id){



			$query= " select count(*) from reviews where idproduct='$id' and rating=2 ";

		$rat1=$conn->query($query);
		 return $rat1->fetchAll();
}

function NbStar3($conn,$id){



			$query= " select count(*) from reviews where idproduct='$id' and rating=3 ";

		$rat1=$conn->query($query);
		 return $rat1->fetchAll();
}

function NbStar4($conn,$id){



			$query= " select count(*) from reviews where idproduct='$id' and rating=4 ";

		$rat1=$conn->query($query);
		 return $rat1->fetchAll();
}

function NbStar5($conn,$id){



			$query= " select count(*) from reviews where idproduct='$id' and rating=5 ";

		$rat1=$conn->query($query);
		 return $rat1->fetchAll();
}


function algoRating($cc,$conn,$id){




			$star1=0;
			$star2=0;
			$star3=0;
			$star4=0;
			$star5=0;


			$etoile1 = $cc->NbStar1($conn,$id);

		 foreach($etoile1 as $l1){

		   $star1=$l1[0];

		 }

	$etoile2 = $cc->NbStar2($conn,$id);

		 foreach($etoile2 as $l2){

		   $star2=$l2[0];

		 }


	$etoile3 = $cc->NbStar3($conn,$id);

		 foreach($etoile3 as $l3){

		   $star3=$l3[0];

		 }

		 $etoile4 = $cc->NbStar4($conn,$id);

		 foreach($etoile4 as $l4){

		   $star4=$l4[0];

		 }

		 $etoile5 = $cc->NbStar5($conn,$id);

		 foreach($etoile5 as $l5){

		    $star5=$l5[0];

		 }

		 $startotal= $star1+$star2+$star3+$star4+$star5;

if(($star5 > $star4 ) and ($star5 > $star3 ) and ($star5 > $star2 )and ($star5 > $star1 )){

	return "5";
}
elseif(($star4 > $star5 ) and ($star4 > $star3 ) and ($star4 > $star2 )and ($star4 > $star1 )){

	return "4";

}elseif(($star3 > $star5 ) and ($star3 > $star4 ) and ($star3 > $star2 )and ($star3 > $star1 )){

	return    "3";
}
elseif(($star2 > $star5 ) and ($star2 > $star4 ) and ($star2 > $star3 )and ($star2 > $star1 )){

	return    "2";
}
elseif(($star1 > $star5 ) and ($star1 > $star4 ) and ($star1 > $star3 )and ($star1 > $star2 )){

	return    "1";
}else{

	return    "1";
}








	}




////////////////footer ///////////////

	function afficheProduitFooter($conn)
	{

		$req='select product.id,product.title, product.image  , author.name as authorname from product
	INNER JOIN category
	on product.categoryID = category.id
	INNER Join author on  product.author = author.id
		order by product.nbrating desc LIMIT 6';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}


/////////////////////////// blog ////////////////////////////
	//////////////////////////////////////////////////////////



function supprimerBlog($id,$conn){
		$req1="delete from blog where id=".$id;

		if($conn->exec($req1)){
return true;

		}


	}

function CountBlog($conn){

		$req="SELECT COUNT(*) FROM blog";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

function afficheBlogtPagination($conn,$depart,$BooksParPage)
	{

		$req='select * from blog
		order by id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function insertBlog($book,$conn){


		$req1="INSERT INTO blog (blog_title,blog_text,blog_admin,image,short_text)
		VALUES ('".$book->getTitle()."','".$book->getText()."','".$book->getAuthor()."','".$book->getImage()."','".$book->getShorttitle()."')";


		$conn->query($req1);
		return true;

	}

	function rechercheBlog($conn,$id){

		$req="select * from blog where id = ".$id;
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

	function updateBlog($conn,$book,$id){

		$query= " update  blog set
		blog_title ='".$book->getTitle()."',
		blog_admin = '".$book->getAuthor()."',
		blog_text = '".$book->getText()."',
		image = '".$book->getImage()."',
		short_text = '".$book->getShorttitle()."'


		where id= ".$id;

		if($conn->query($query)){
			return true;
		}


	}

		function afficheBlogPagination($conn,$depart,$BooksParPage)
	{

		$req='select * from blog
		order by id desc LIMIT '.$depart.','.$BooksParPage.'';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}
		function afficheBlogIndex($conn)
	{

		$req='select * from blog
		order by id desc ';
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}

function insertReviewBlog($book,$conn){

		$req1="INSERT INTO blog_reviews (blog_id,name,summary,review)
		VALUES (:id , :name , :summary , :review )";
		$sqlprep=$conn->prepare($req1);

 $sqlprep->bindValue(':id', $book->getId_product(), PDO::PARAM_INT);
 $sqlprep->bindValue(':name', $book->getName(), PDO::PARAM_STR);
 $sqlprep->bindValue(':summary', $book->getSummary(), PDO::PARAM_STR);
 $sqlprep->bindValue(':review', $book->getReview(), PDO::PARAM_STR);



		if($sqlprep->execute()){

			return true ;
		}



	}

	function afficheReviewBlog($conn,$id){
		$req="SELECT * FROM blog_reviews where blog_id ='$id' ORDER BY `id` DESC ";
		$liste=$conn->query($req);
		return $liste->fetchAll();

	}

///////////////////////////////////////////  ///////////////////////////////////////
//////////////////////////////////  khaled //////////////////////////////////////

////////////////ticket////////////////////////
 function afficherTicket($conn,$id)// affichage bouh 3la khouh
		{

			$query = "SELECT * FROM ticket WHERE id_ticket=".$id;
			$liste=$conn->query($query);
				return $liste->fetchAll();






		}

		 function displayTicket($conn,$state) // affichage des tickets non résolu state 0
		{

			$query = "SELECT * FROM ticket WHERE state=".$state;
				$liste=$conn->query($query);
				return $liste->fetchAll();

		}
		function displayTickett($conn,$state) // affichage des tickets non résolu state 0
		{

			$query = "SELECT * FROM ticket WHERE state=".$state;
				$liste=$conn->query($query);
				return $liste->fetchAll();

		}
		 function displayTicketId_user($conn,$id_user) //affichage selon ID présente fel session
		{

			$query = "SELECT * FROM ticket WHERE state = 0 AND id_user=".$id_user;
			$liste=$conn->query($query);
				return $liste->fetchAll();



		}

		 function ajouterTicket($conn,$ticket)// l'ajout
		{

			$requete="INSERT INTO ticket (name, email, text, state,id_user) VALUES ('".$ticket->getname()."','".$ticket->getemail()."','".$ticket->gettext()."',1,".$ticket->getid_user().")";
				$conn->query($requete);

		}
		function CountTicket($conn){



			$query= " select count(*) from ticket where state=1 ";

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}
function CountTickett($conn){



			$query= " select count(*) from ticket where state=0 ";

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}
function CountTicketId_user($conn,$id_user){



	$query= " select count(*) from ticket where id_user= ".$id_user;

$rat2=$conn->query($query);
 return $rat2->fetchAll();
}
function CountTicketId_user0($conn,$id_user){



	$query= " select count(*) from ticket WHERE state = 0 AND id_user= ".$id_user;

$rat2=$conn->query($query);
 return $rat2->fetchAll();
}



		 function modifierTicket($conn,$id)//après View ticket ne s'affichera plus dans le tab dashboard
		{

			$query="UPDATE ticket SET state = '0' WHERE id_ticket = ".$id;
			$conn->query($query);
		}
		function banirTicket($conn,$id)//après View ticket ne s'affichera plus dans le tab dashboard
	 {

		 $query="UPDATE ticket SET state = '2' WHERE id_ticket = ".$id;
		 $conn->query($query);
	 }

		 function deleteTicket($conn,$id)
		{

			$query = "DELETE FROM ticket WHERE id_ticket = ".$id;
			$conn->query($query);
		}



                 ///////////////////////CHART/////////////////////////////////////////////////////////////////////////
		 function ajouterchart ($conn,$chart)
		 {$reqc="INSERT INTO chart (name,textchart) VALUES ('".$chart->getName()."','".$chart->getTextchart()."')";
		 $conn->query($reqc);}
		 function updaterchart ($conn,$chart)
		 {$reqc="UPDATE chart SET textchart ='".$chart->getTextchart()."',textchart ='".$chart->getName()."'";
		 $conn->query($reqc);}

		 function afficherchart($conn,$id)// affichage bouh 3la khouh
		{

			$query = "SELECT * FROM chart WHERE id_chart=".$id;
			$listec=$conn->query($query);
				return $listec->fetchAll();

		}

		///////////////////////////////////////////poll////////////////////////////////////////////
           function ajouterpoll ($conn,$poll)
		 {$reqp="INSERT INTO poll (question,answer1,answer2,answer3) VALUES ('".$poll->getquestion()."','".$poll->getanswer1()."','".$poll->getanswer2()."','".$poll->getanswer3()."')";
		 $conn->query($reqp);}

		 function afficherpoll($conn)// affichage bouh 3la khouh
		{

			$query = "SELECT * FROM poll ORDER BY id_poll DESC LIMIT 1";
			$listep=$conn->query($query);
				return $listep->fetchAll();

		}
		function afficherpollid($conn)// affichage bouh 3la khouh
		{

			$query = "SELECT id_poll FROM poll ORDER BY id_poll DESC LIMIT 1";
			$listep=$conn->query($query);
				return $listep->fetchAll();

		}
		function CountPoll($conn){



			$query= " select count(*) from poll ";

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}

/////////////////////////////////////////////////pollscore//////////////////////////////////



		function afficherpollscore($conn)// affichage bouh 3la khouh
		{

			$query = "SELECT id_pollscore FROM pollscore ORDER BY id_pollscore DESC LIMIT 1";
			$listeps=$conn->query($query);
				return $listeps->fetchAll();

		}
		function Countscore1($conn,$idp){



			$query= " select count(answer1score) from pollscore where answer1score=1 and id_poll=".$idp;

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}
         function Countscore2($conn,$idp){



			$query= " select count(answer2score) from pollscore where answer2score=1 and id_poll=".$idp;

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}
function Countscore3($conn,$idp){

			$query= " select count(answer3score) from pollscore where answer3score=1 and id_poll=".$idp;

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}


		function updateScore1($conn,$idp,$iduser){

			$query= " insert into pollscore (id_poll , answer1score,answer2score , answer3score,id_user) values ('$idp',1,0,0,'$iduser')";


		  $conn->query($query);
}
	function updateScore2($conn,$idp,$iduser){

			$query= " insert into pollscore (id_poll , answer1score,answer2score , answer3score,id_user) values ('$idp',0,1,0,'$iduser')";


		  $conn->query($query);
}
	function updateScore3($conn,$idp,$iduser){

			$query= " insert into pollscore (id_poll , answer1score,answer2score , answer3score,id_user) values ('$idp',0,0,1,'$iduser')";


		  $conn->query($query);
}

function verifUser($conn,$idp,$id){

			$query= " select id_user from pollscore where id_user='$id' and  id_poll=".$idp;

		$rat2=$conn->query($query);
		 return $rat2->fetchAll();
}



		/////////////////////////uptime////////////////////////


     function afficheruptime($conn)// affichage bouh 3la khouh
		{

			$query = "SELECT * FROM uptime ORDER BY id_uptime DESC LIMIT 1";
			$listu=$conn->query($query);
				return $listu->fetchAll();

		}
		function ajouteruptime ($conn,$uptime)
		 {$requ="INSERT INTO uptime (monday1,monday2,saturday1,saturday2,sunday1,sunday2) VALUES ('".$uptime->getmonday1()."','".$uptime->getmonday2()."','".$uptime->getsaturday1()."','".$uptime->getsaturday2()."','".$uptime->getsunday1()."','".$uptime->getsunday2()."')";
		 $conn->query($requ);}
		 ////////////////////////////////////////////////////////////////////////////////////////////////
					///////////////////////////////////////////////CotaMar///////////////////////////////
						function insert_Cot_M_1($conn,$cot_mar)
					 	{
						$requ="INSERT INTO cotationmaritime
						(idcmnew,id_user,typecota,danger,un,classe,incoterm,transport,prise_charge,livraison,info,adresse_prise_charge,code_postal_charge,adresse_livraison,code_postal_livraison,state)
						VALUES
						('".$cot_mar->getidcm()."','".$cot_mar->getid_user()."','".$cot_mar->gettypecota()."','".$cot_mar->getdanger()."','".$cot_mar->getun()."','".$cot_mar->getclasse()."','".$cot_mar->getincoterm()."','".$cot_mar->gettransport()."','".$cot_mar->getprise_charge()."','".$cot_mar->getlivraison()."','".$cot_mar->getinfo()."','".$cot_mar->getadresse_prise_charge()."','".$cot_mar->getcode_postal_charge()."','".$cot_mar->getadresse_livraison()."','".$cot_mar->getcode_postal_livraison()."','".$cot_mar->getstate()."')";
					 	$conn->query($requ);

					}////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					function insertTrans_m($conn,$trans_mar)// l'ajout
				 {

				 	$requete6="INSERT INTO transportmaritime (idc,nbr,type,poids,temperature)
					VALUES ('".$trans_mar->getidc()."','".$trans_mar->getnbr()."','".$trans_mar->getpoids()."','".$trans_mar->gettype()."','".$trans_mar->gettemperature()."')";
				 		$conn->query($requete6);

				 }
				 function insertCol_m($conn,$col_mar)// l'ajout
				{

				 $requete7="INSERT INTO colismaritime (idcm,nbr,type,typecc,poids,gerbable)
				 VALUES ('".$col_mar->getidcc()."','".$col_mar->getnbrc()."','".$col_mar->gettypec()."','".$col_mar->gettypecc()."','".$col_mar->getpoidsc()."','".$col_mar->getgerbablec()."')";
					 $conn->query($requete7);

				}

				 function last_cotam($conn,$id){

							 $query= " SELECT MAX(idcm) FROM cotationmaritime where id_user=".$id;

						 $rat3=$conn->query($query);
							return $rat3->fetchAll();
				 }


					///////User Related Display - List Inbox All /////
						function display_CotM_byuser_id_All($conn,$id){

									$query= " SELECT * from cotationmaritime where id_user =".$id;

								$rat3=$conn->query($query);
								 return $rat3->fetchAll();
						} ///// List inbox with state
						function display_CotM_byuser_id_All_and_state($conn,$id,$state){

									$query= " SELECT * from cotationmaritime WHERE id_user='$id' and  state=".$state;

								$rat2=$conn->query($query);
								 return $rat2->fetchAll();
						} ///// One Display By View /////
						function display_CotM_by_idcm($conn,$idcm){

									$query= " select * from cotationmaritime where idcmnew =".$idcm;

								$rat2=$conn->query($query);
								 return $rat2->fetchAll();
						} ///////Display Read/not read For admin ////////
						function display_CotM_by_state($conn,$state){

									$query= " select * from cotationmaritime where state =".$state;

								$rat2=$conn->query($query);
								 return $rat2->fetchAll();
						}
						//////////////////Col Mar///////////////////
						////////////////Display///////////
						function display_CotM_Col_M($conn,$idcm){

									$query= " select * from colismaritime where idcm =".$idcm;

								$rat2=$conn->query($query);
								 return $rat2->fetchAll();
						}
						//////////////////trans Mar///////////////////
						////////////////Display///////////
						function display_CotM_Trans_M($conn,$idcm){

									$query= " select * from transportmaritime where idc =".$idcm;

								$rat2=$conn->query($query);
								 return $rat2->fetchAll();
						}



		 ////////////////////////////////////////////////////////////////////////////////////////////////
 				 ///////////////////////////////////////////////client///////////////////////////////
 				 function insertClient($client,$conn){

 				$req1="INSERT INTO client (email,mdp,Civ,societe,activite,nom,prenom,pays,gouv,adresse,Ville,code_postal,telephone,tel_port,fax,cle)
 				VALUES ('".$client->getemail()."','".$client->getmdp().
 				"','".$client->getciv()."','".$client->getsociete()."','".$client->getactivite()."','".$client->getnom()."','".$client->getprenom()."','".$client->getpays()."','".$client->getgouv()."','".$client->getadresse()."','".$client->getville()."','".$client->getcode_postal()."','".$client->gettelephone()."','".$client->gettel_port()."','".$client->getfax()."','".$client->getkey()."')";
 				if($conn->query($req1)){

 				return true;
 				}
 			}
			function displayClient($conn,$id) // affichage des tickets non résolu state 0
		 {

			 $query = "SELECT * FROM client WHERE id=".$id;
				 $liste=$conn->query($query);
				 return $liste->fetchAll();

		 }

}

?>
