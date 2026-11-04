<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_all_public_pages_render_with_shared_navigation(): void
    {
        $pages = [
            '/' => 'Tumbuh dalam ilmu',
            '/tentang' => 'Tumbuh bersama, memberi manfaat',
            '/program' => 'Jelajahi program',
            '/berita' => 'Menguatkan silaturahmi',
            '/kontak' => 'Ceritakan kebutuhan Anda',
        ];

        foreach ($pages as $uri => $content) {
            $response = $this->get($uri)
                ->assertOk()
                ->assertSee('Tentang Kami')
                ->assertSee('HIDAYATULLAH')
                ->assertSeeText($content);

            $response->assertDontSee('http://localhost:8000');

            if ($uri === '/kontak') {
                $response->assertSee('action="/kontak"', false);
            }
        }
    }

    public function test_contact_form_validates_required_fields_and_accepts_valid_input(): void
    {
        $this->from(route('contact'))
            ->post(route('contact.send'), [])
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors(['name', 'email', 'subject', 'message']);

        $this->from(route('contact'))
            ->post(route('contact.send'), [
                'name' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'subject' => 'Informasi program',
                'message' => 'Mohon informasi lebih lanjut tentang program pendidikan.',
            ])
            ->assertRedirect(route('contact'))
            ->assertSessionHas('success', 'Formulir berhasil divalidasi. Pengiriman email belum diaktifkan.');
    }
}
