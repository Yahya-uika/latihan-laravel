<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_renders_angkatan_profile_and_navigation(): void
    {
        $response = $this->get('/')
            ->assertOk()
            ->assertSee('Angkatan 14 Al-Muntadhorun')
            ->assertSee('Galeri Kenangan Al-Muntadhorun')
            ->assertSeeText("Tekad Api Perubahan Mewujudkan Generasi Qur'ani.")
            ->assertSee('alt="Logo Angkatan 14 Al-Muntadhorun"', false);

        foreach (['Beranda', 'Profil Angkatan', 'Perjalanan', 'PORSENI 2024', 'OSMA 2024–2025', 'Galeri', 'Anggota'] as $label) {
            $response->assertSeeText($label);
        }

        foreach (['beranda', 'profil', 'perjalanan', 'porseni', 'osma', 'galeri', 'anggota'] as $section) {
            $response->assertSee('id="'.$section.'"', false);
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
