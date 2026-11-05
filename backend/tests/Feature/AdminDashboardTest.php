<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    public function test_admin_dashboard_page_is_displayed(): void
    {
        $this->withoutVite()
            ->get('/admin')
            ->assertOk()
            ->assertSee('Dashboard Overview')
            ->assertSee('Total Article Views')
            ->assertSee('Top Performing Stories');

        $this->get('/admin/dashboard')->assertOk()->assertSee('Dashboard Overview');
        $this->get('/admin/main')->assertRedirect('/admin');
    }

    public function test_admin_articles_menu_page_is_displayed(): void
    {
        $this->withoutVite()
            ->get('/admin/news')
            ->assertOk()
            ->assertSee('Articles')
            ->assertSee('TITLE')
            ->assertSee('All Statuses')
            ->assertSee('Dashboard');
    }

    public function test_admin_products_menu_page_is_displayed(): void
    {
        $this->withoutVite()
            ->get('/admin/products')
            ->assertOk()
            ->assertSee('Products')
            ->assertSee('PRODUCT')
            ->assertSee('iPhone 18 Pro Max 256GB')
            ->assertSee('data-delete-product', false)
            ->assertSee('Delete iPhone 18 Pro Max 256GB')
            ->assertSee('Dashboard');
    }

    public function test_admin_videos_menu_page_is_displayed(): void
    {
        $this->withoutVite()
            ->get('/admin/videos')
            ->assertOk()
            ->assertSee('Videos')
            ->assertSee('VIDEO')
            ->assertSee('iPhone Review and First Impressions')
            ->assertSee('Upload Video')
            ->assertSee('add-video-modal')
            ->assertSee('YOUTUBE URL')
            ->assertSee('Short video description...')
            ->assertSee('Add Video')
            ->assertSee('data-delete-video', false)
            ->assertSee('Delete iPhone Review and First Impressions')
            ->assertSee('Dashboard');
    }
}
