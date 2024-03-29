
BEGIN;

-----------------------------------------------------------------------
-- comment
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "comment" CASCADE;

CREATE TABLE "comment"
(
    "id" serial NOT NULL,
    "author_name" VARCHAR(64),
    "author_email" VARCHAR(64),
    "comment_text" VARCHAR(1024) NOT NULL,
    "comment_title" VARCHAR(128),
    "avatar_link" VARCHAR(1024),
    "comment_date" TIMESTAMP,
    "page_id" INTEGER NOT NULL,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- captcha
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "captcha" CASCADE;

CREATE TABLE "captcha"
(
    "id" serial NOT NULL,
    "question" VARCHAR(64) NOT NULL,
    "answer" VARCHAR(64) NOT NULL,
    PRIMARY KEY ("id")
);

COMMIT;
