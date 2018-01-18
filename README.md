**Laravel Artisan for Every Day Driving**

*A demo Laravel Project highlighting Laravel Artisan*
*Created for the Omaha Laravel Meetup group*

**by:** *[@BeardAboutIt](https://twitter.com/BeardAboutIt)*

<a name="installation"></a>
# Installation

1. Clone the repository to wherever you keep projects locally.
`git clone git@gitlab.com:PeterDKC/cat-friends.git`
1. Head into the cat-friends project directory.
`cd cat-friends`
1. Install the Composer dependencies.
`composer install`
1. Copy `.env.example` to `.env`
1. Set any necessary details in `.env` such as your database user and password.
1. Generate a local application key.
`php artisan key:generate`
1. Run your migrations and set up some smaple data.
`php artisan cats:fresh`

<a name="meetup-presentation"></a>
# Meetup Presentation

- The [Presentation Notes](PRESENTATION.md) contain the outline of the talk.

<a name="finished-version"></a>
# Finished Version

To see a finished version of the repository:

1. Checkout the Dry Run branch.
`git checkout dryrun`
2. Re-Run your migrations and refresh your sample data.
`php artisan cats:fresh`
