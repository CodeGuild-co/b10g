# base-php
This is the base of blogging website written in PHP

## Instructions

To get this base blog online you'll need to:

1. Get Billy to give you your own copy of this repo
    - You probably already have this
    - You'll have picked a unique domain name too
2. Signup to [Heroku](heroku.com)
3. Create an app on Heroku
    - Use the European region when asked
4. Connect your Heroku account to your Github account
5. Connect your Heroku app to your Github repo
6. Enable automatic deploys
7. Make a change to your repo (using the Github editor)
8. Visit your Heroku app's settings and add a custom domain
    - add your personal CodeGuild domain
    - e.g. `wm.codeguild.co`
8. Visit your domain and see your blog!


## Adding Posts

1. Create a file for your new post in `web/views/posts`
2. Update `web/views/layout.html` to include your new post
2. Update `web/views/index.twig` to include your new post

It's easy, but boring. You should try using PHP (and Silex) to automate these steps (be lazy!).
