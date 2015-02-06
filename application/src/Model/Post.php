<?php

/**
 * @Entity
 * @Table(name="posts")
 **/
class Post
{

    /** @Id @Column(type="integer") @GeneratedValue * */
    public $id;

    /** @Column(type="string") * */
    public $slug;

    /** @Column(type="string") * */
    public $title;

    /** @Column(type="text") * */
    public $body;

}