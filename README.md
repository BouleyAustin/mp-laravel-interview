# Ministry Pass Laravel Trial
This project is set up to use the [TALL stack](https://tallstack.dev/).

## Prerequisites
* Requires >= PHP 8.1
* Requires Node 16+
* Local database (MySQL or PostgreSQL)

## Getting Started
* `composer install`
* `cp .env.example .env` (Enter your database credentials)
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan db:seed`

For the purposes of this project, the seeder will generate 10,000 random users. This may take some time.


## Running the app
* `npm install && npm run dev` to start the frontend
* `php artisan serve` to start the backend
* `php artisan queue:work` to start a queue worker

---

## 1. Create a new route accessible at `/users`
* This route should display a list of all the users in the database, showing `id`, `email`, `name`, and `created_at`.
* Employ some kind of pagination in order to break the displayed users up into reasonable chunks.

## 2. Make the users searchable
* Add a search bar to the users screen you created.
* The search should filter the users by a match on any of the fields.
* Bonus points if the search is a live search, showing results in near-real time
* Bonus points if the matching data is highlighted or otherwise emphasized within the results

## 3. Fix the user notifications
On the home screen, there's a button to "Send Notification to All Users". 

Clicking this button will enqueue a job for each user to send a notification to them. However, as you will see by testing this, the  interaction takes quite a while to complete. 

Improve this process and make the frontend respond as quickly as possible, while still successfully enqueueing all the necessary jobs to notify all users.
