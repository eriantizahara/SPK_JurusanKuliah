<?php

namespace App\Services;

class DecisionTreeService
{
    public function proses(array $data): string
    {
        switch ($data['minat']) {

            /* =========================
             *  MINAT AKADEMIK : BAHASA
             * ========================= */
            case 'Bahasa':
                return $this->bahasa($data);

            /* =========================
             *  MINAT AKADEMIK : SAINTEK
             * ========================= */
            case 'Saintek':
                return $this->saintek($data);

            /* =========================
             *  MINAT AKADEMIK : SOSHUM
             * ========================= */
            case 'SosHum':
                return $this->soshum($data);

            /* =========================
             *  MINAT AKADEMIK : SENI
             * ========================= */
            case 'Seni':
                return $this->seni($data);

            default:
                return "Minat akademik tidak valid.";
        }
    }

    /* ==========================================================
     *  BAHASA
     * ========================================================== */
    private function bahasa($d): string
    {
        if ($d['kepribadian'] == 'Introvert') {

            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Menulis') {
                    return "Sastra Indonesia, Sastra Inggris";
                }
                if ($d['kemampuan'] == 'Analisis') {
                    return "Linguistik, Kajian Bahasa";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Penyunting Profesional";
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Menulis') {
                    return "Jurnalistik";
                }
                if ($d['kemampuan'] == 'Analisis') {
                    return "Penelitian Bahasa & Budaya";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Reporter, Jurnalis Lapangan";
                }
            }
        }

        if ($d['kepribadian'] == 'Extrovert') {

            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Menulis') {
                    return "Copywriting, Penulisan Kreatif";
                }
                if ($d['kemampuan'] == 'Analisis') {
                    return "Penyiaran Pendidikan";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Ilmu Komunikasi, Public Relations";
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Menulis') {
                    return "Penulis Media, Wartawan";
                }
                if ($d['kemampuan'] == 'Analisis') {
                    return "Analyst Media & Bahasa";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Broadcasting, Presenter";
                }
            }
        }

        return "Tidak ditemukan rekomendasi jurusan (Bahasa).";
    }

    /* ==========================================================
     *  SAINTEK
     * ========================================================== */
    private function saintek($d): string
    {
        // Introvert
        if ($d['kepribadian'] == 'Introvert') {
            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Logika') {
                    if ($d['industri'] == 'IT') {
                        return "Teknik Informatika, Sistem Informasi, Teknologi Informasi";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Akuntansi, Manajemen, Ekonomi";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Industri, Teknik Kimia, Statistika Industri";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Farmasi, Analisis Kesehatan, Gizi";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Grafis, Desain UI/UX, Animasi";
                    }
                }

                if ($d['kemampuan'] == 'Kreativitas') {
                    if ($d['industri'] == 'IT') {
                        return "Multimedia IT, Sistem Multimedia, Informatika Visual";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Bisnis Digital, Manajemen Pemasaran, Administrasi Bisnis";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Industri Kreatif, Teknik Material, Rekayasa Produk";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Pendidikan Kesehatan, Administrasi Rumah Sakit, Kesehatan Masyarakat";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Komunikasi Visual, Desain Interior, Desain Produk";
                    }
                }

                if ($d['kemampuan'] == 'Komunikasi') {
                    if ($d['industri'] == 'IT') {
                        return "Informatika Bisnis, Sistem Informasi Bisnis, Manajemen Informatika";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Administrasi Perkantoran, Manajemen SDM, Manajemen Logistik";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Manajemen Industri, Teknologi Rekayasa Manufaktur, Teknik Pengelolaan Sistem";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Administrasi Kesehatan, Rekam Medis, Kesehatan Masyarakat";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Komunikasi Visual, Desain Media, Periklanan";
                    }
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Logika') {
                    if ($d['industri'] == 'IT') {
                        return "Jaringan Komputer, Teknik Telekomunikasi";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Logistik, Manajemen Operasional";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Mesin";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Analisis Kesehatan Lapangan";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Teknologi Kemasan";
                    }
                }

                if ($d['kemampuan'] == 'Kreativitas') {
                    if ($d['industri'] == 'IT') {
                        return "Multimedia Lapangan, Fotografi & Videografi IT";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Bisnis Kreatif Lapangan";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Pengembangan Produk";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Promosi Kesehatan Lapangan";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Produk Lapangan";
                    }
                }

                if ($d['kemampuan'] == 'Komunikasi') {
                    if ($d['industri'] == 'IT') {
                        return "Manajemen Sistem Informasi Lapangan";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Survey Bisnis dan Pasar";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "K3 (Keselamatan & Kesehatan Kerja)";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Edukator Kesehatan Lapangan";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Dokumentasi Kreatif Lapangan";
                    }
                }
            }
        }

        // Extrovert
        if ($d['kepribadian'] == 'Extrovert') {
            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Logika') {
                    if ($d['industri'] == 'IT') {
                        return "Sistem Informasi, Informatika Bisnis";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Manajemen, Administrasi Bisnis";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Industri";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Administrasi Rumah Sakit";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Teknologi Desain";
                    }
                }

                if ($d['kemampuan'] == 'Kreativitas') {
                    if ($d['industri'] == 'IT') {
                        return "Desain Multimedia, UI/UX Designer";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Marketing, Bisnis Digital";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Rekayasa Produk";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Edukator Kesehatan";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Komunikasi Visual";
                    }
                }

                if ($d['kemampuan'] == 'Komunikasi') {
                    if ($d['industri'] == 'IT') {
                        return "IT Support Corporate, Konsultan IT";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Public Relations, Manajemen SDM";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Supervisor Operasional";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Rekam Medis";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Periklanan";
                    }
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Logika') {
                    if ($d['industri'] == 'IT') {
                        return "Jaringan Komputer, Teknik Telekomunikasi, Cyber Security";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Manajemen Operasional, Manajemen Retail, Logistik";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Teknik Mesin, Teknik Elektro, Teknik Sipil";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Keperawatan, Fisioterapi, Kesmas Lapangan";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Produksi, Creative Industry, Teknologi Kemasan";
                    }
                }

                if ($d['kemampuan'] == 'Kreativitas') {
                    if ($d['industri'] == 'IT') {
                        return "Desain UI/UX, Multimedia, Animasi Digital";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Marketing Komunikasi, Manajemen Pemasaran, Bisnis Kreatif";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Desain Produk Industri, Rekayasa Desain, Pengembangan Produk";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Kesehatan Masyarakat";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Komunikasi Visual, Fotografi & Videografi";
                    }
                }

                if ($d['kemampuan'] == 'Komunikasi') {
                    if ($d['industri'] == 'IT') {
                        return "Informatika Bisnis, Teknologi Informasi & Layanan Pengguna, Manajemen Sistem Informasi";
                    }
                    if ($d['industri'] == 'Bisnis') {
                        return "Manajemen SDM, Public Relations, Kewirausahaan";
                    }
                    if ($d['industri'] == 'Industri') {
                        return "Manajemen Operasional, Teknik Pengawasan Proyek, Teknik Keselamatan dan Kesehatan Kerja";
                    }
                    if ($d['industri'] == 'Kesehatan') {
                        return "Keperawatan Komunitas, Fisioterapi Lapangan, Kesehatan Masyarakat";
                    }
                    if ($d['industri'] == 'Desain') {
                        return "Desain Komunikasi Visual, Periklanan Lapangan, Media & Broadcasting";
                    }
                }
            }
        }

        return "Tidak ditemukan rekomendasi jurusan (Saintek).";
    }

    /* ==========================================================
     *  SOSHUM
     * ========================================================== */
    private function soshum($d): string
    {
        // Introvert - Kantor
        if ($d['kepribadian'] == 'Introvert' && $d['karir'] == 'Kantor') {
            if ($d['kemampuan'] == 'Logika') {
                if ($d['industri'] == 'Bisnis') {
                    return "Akuntansi, Psikologi, Ilmu Perpustakaan";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Administrasi Publik, Sosiologi, Ilmu Hukum";
                }
            }

            if ($d['kemampuan'] == 'Kreativitas') {
                if ($d['industri'] == 'Bisnis') {
                    return "Manajemen, Administrasi Bisnis, Bisnis Digital";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Politik Pemerintahan, Sosiologi Terapan, Hubungan Masyarakat";
                }
            }

            if ($d['kemampuan'] == 'Komunikasi') {
                if ($d['industri'] == 'Bisnis') {
                    return "Ekonomi, Kewirausahaan, Administrasi Niaga";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Hukum Ekonomi, Komunikasi Bisnis, Ilmu Komunikasi";
                }
            }
        }

        // Introvert - Lapangan
        if ($d['kepribadian'] == 'Introvert' && $d['karir'] == 'Lapangan') {
            if ($d['kemampuan'] == 'Logika') {
                if ($d['industri'] == 'Bisnis') {
                    return "Ekonomi Pembangunan, Perdagangan Internasional, Manajemen Pemasaran";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Kriminologi, Event Organizer, Broadcasting";
                }
            }

            if ($d['kemampuan'] == 'Kreativitas') {
                if ($d['industri'] == 'Bisnis') {
                    return "Manajemen, Administrasi Bisnis, Bisnis Digital (Lapangan)";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Desain Komunikasi Visual, Jurnalistik, Produksi Media";
                }
            }

            if ($d['kemampuan'] == 'Komunikasi') {
                if ($d['industri'] == 'Bisnis') {
                    return "Ilmu Ekonomi Syariah, Bisnis Internasional, Manajemen Operasional";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Hubungan Internasional, Penyiaran, Public Relations Lapangan";
                }
            }
        }

        // Extrovert - Kantor
        if ($d['kepribadian'] == 'Extrovert' && $d['karir'] == 'Kantor') {
            if ($d['kemampuan'] == 'Logika') {
                if ($d['industri'] == 'Bisnis') {
                    return "Akuntansi, Ekonomi, Manajemen Operasional";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Ilmu Hukum, Politik Pemerintahan, Sosiologi";
                }
            }

            if ($d['kemampuan'] == 'Kreativitas') {
                if ($d['industri'] == 'Bisnis') {
                    return "Manajemen, Bisnis Digital, Administrasi Bisnis";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Event Organizer, Creative Marketing, Desain Komunikasi Visual";
                }
            }

            if ($d['kemampuan'] == 'Komunikasi') {
                if ($d['industri'] == 'Bisnis') {
                    return "Manajemen SDM, Marketing, Public Relations Korporat";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Ilmu Komunikasi, Periklanan, Broadcasting Kantor";
                }
            }
        }

        // Extrovert - Lapangan
        if ($d['kepribadian'] == 'Extrovert' && $d['karir'] == 'Lapangan') {
            if ($d['kemampuan'] == 'Logika') {
                if ($d['industri'] == 'Bisnis') {
                    return "Ekonomi Pembangunan, Manajemen Risiko, Project Management";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Kriminologi, Investigasi Sosial, Penyiaran Lapangan";
                }
            }

            if ($d['kemampuan'] == 'Kreativitas') {
                if ($d['industri'] == 'Bisnis') {
                    return "Kewirausahaan, Bisnis Kreatif, Manajemen Acara";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Desain Visual, Jurnalistik Lapangan, Produksi Media Lapangan";
                }
            }

            if ($d['kemampuan'] == 'Komunikasi') {
                if ($d['industri'] == 'Bisnis') {
                    return "Manajemen Pemasaran, Sales Strategis, Konsultan Bisnis Lapangan";
                }
                if ($d['industri'] == 'Komunikasi') {
                    return "Hubungan Masyarakat Lapangan, Reporter, Komunikasi Massa";
                }
            }
        }

        return "Tidak ditemukan rekomendasi jurusan (SosHum).";
    }

    /* ==========================================================
     *  SENI
     * ========================================================== */
    private function seni($d): string
    {
        if ($d['kepribadian'] == 'Introvert') {
            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Kreativitas') {
                    return "Desain Grafis, Animasi";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Manajemen Seni";
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Kreativitas') {
                    return "Seni Rupa, Fotografi";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Produksi Film";
                }
            }
        }

        if ($d['kepribadian'] == 'Extrovert') {
            if ($d['karir'] == 'Kantor') {
                if ($d['kemampuan'] == 'Kreativitas') {
                    return "Desain Komunikasi Visual";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Event Organizer";
                }
            }

            if ($d['karir'] == 'Lapangan') {
                if ($d['kemampuan'] == 'Kreativitas') {
                    return "Teater, Musik";
                }
                if ($d['kemampuan'] == 'Komunikasi') {
                    return "Penyiaran, Performing Arts";
                }
            }
        }

        return "Tidak ditemukan rekomendasi jurusan (Seni).";
    }
}
