<?php

Yii::import('application.vendors.*');
require_once('Zend/Feed.php');
require_once('Zend/Feed/Rss.php');

class FeedController extends CController
{
        /**
         * Feed (from the cookbook 20)
         */
	public function actionIndex()
	{
		$req = new CHttpRequest;
		// retrieve the latest posts
		$posts=Post::model()->findAll(array(
			'order'=>'createTime DESC',
			'limit'=> Yii::app()->params['postsPerFeedCount'],
		));
		// convert to the format needed by Zend_Feed
		$entries=array();
		foreach($posts as $post)
		{
			$entries[]=array(
				'title'=>CHtml::encode($post->title),
				'link'=>CHtml::encode($req->getHostInfo().$this->createUrl('post/show',array('id'=>$post->id))),
				'description'=>$post->content,
				'lastUpdate'=>$post->createTime,
			);
		}
		// generate and render RSS feed
		$feed=Zend_Feed::importArray(array(
			'title'   => 'My Post Feed',
			'link'    => $this->createUrl(''),
			'charset' => 'UTF-8',
			'entries' => $entries,      
		), 'rss');
		$feed->send();
	}
}
