<?php

namespace App\Policies;

use App\User;
use App\Carousel;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarouselPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the carousel.
     *
     * @param  \App\User  $user
     * @param  \App\Carousel  $carousel
     * @return mixed
     */
    public function before($user, $ability) {
        if ($user->isAdmin()) {
            return true;
        }
    }
    public function view(User $user, Carousel $carousel)
    {
        //
    }

    /**
     * Determine whether the user can create carousels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the carousel.
     *
     * @param  \App\User  $user
     * @param  \App\Carousel  $carousel
     * @return mixed
     */
    public function update(User $user, Carousel $carousel)
    {
        //
    }

    /**
     * Determine whether the user can delete the carousel.
     *
     * @param  \App\User  $user
     * @param  \App\Carousel  $carousel
     * @return mixed
     */
    public function delete(User $user, Carousel $carousel)
    {
        //
    }

    /**
     * Determine whether the user can restore the carousel.
     *
     * @param  \App\User  $user
     * @param  \App\Carousel  $carousel
     * @return mixed
     */
    public function restore(User $user, Carousel $carousel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the carousel.
     *
     * @param  \App\User  $user
     * @param  \App\Carousel  $carousel
     * @return mixed
     */
    public function forceDelete(User $user, Carousel $carousel)
    {
        //
    }
}
