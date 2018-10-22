<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
	/**
	*@Route("/post", name="view_post_route")
	*/

	public function viewPostAction(){
		return $this->render("pages/index.html.twig");
	}


	/**
	*@Route("/post/create", name="create_post_route")
	*/

	public function createPostAction(){
		return $this->render("pages/create.html.twig");
	}


	/**
	*@Route("/post/update/{id}", name="update_post_route")
	*/

	public function updatePostAction($id, Request $Request){
		return $this->render("pages/update.html.twig");
	}

	/**
	*@Route("/post/delete/{id}", name="delete_post_route")
	*/

	public function deletePostAction($id, Request $Request){
		return $this->render("pages/delete.html.twig");
	}	


	/**
	*@Route("/post/view/{id}", name="show_post_route")
	*/

	public function showPostAction($id, Request $Request){
		return $this->render("pages/view.html.twig");
	}

	
	





}