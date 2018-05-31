<?php
    class CommentsUtility {
        /**
         * Method used for getting comments out of DataBase via passed PageID 
         * @param {String} author : comment's author
         * @param {String} title : comment's title
         * @param {String} text : comment's content 
         * @param {Integer} pageId : ID of Page (where comment is located)
        */
        public function saveComment($author, $title, $text, $pageId) {
            $comment = new Comment();
            $comment->setAuthorName = $author;
            $comment->setCommentTitle = $title;
            $comment->setCommentText = $text;
            $comment->setCommentDate = gmdate('Y-m-d h:i:s \G\M\T', time());
            $comment->setPageId = $pageId;
            $comment->save();
        }
        /**
         * Method used for getting comments out of DataBase via passed PageID 
         * @param {integer} pageId : ID of Page 
         * @return {Objects' array} comments' objects
        */
        public function getComments($pageId) {
            return AuthorQuery::create()->filterByPageId($pageId)->find();
        }
    }
?>