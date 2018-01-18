**Laravel Artisan for Every Day Driving**

*A demo Laravel Project highlighting Laravel Artisan*
*Created for the Omaha Laravel Meetup group*

**by:** *[@BeardAboutIt](https://twitter.com/BeardAboutIt)*

<!-- MarkdownTOC autolink="true" autoanchor="true" -->

- [Installation][installation]
- [Meetup Presentation][meetup-presentation]
- [Finished Version][finished-version]

<!-- /MarkdownTOC -->


<a name="installation"></a>
# Installation

- `git clone git@gitlab.com:PeterDKC/cat-friends.git`
- `cd cat-friends`
- `composer install`
- Copy `.env.example` to `.env`, set any necessary details such as your database user and password.
- `php artisan key:generate`
- `php artisan cats:fresh`

<a name="meetup-presentation"></a>
# Meetup Presentation

- The [Presentation Notes](PRESENTATION.md) contain the outline of the talk.

<a name="finished-version"></a>
# Finished Version

To see a finished version of the repository:

- `git checkout dryrun`
- `php artisan cats:fresh`
