import { Link, usePage } from "@inertiajs/react";

export default function Sidebar() {
    const { url } = usePage();

    const menus = [
        {
            title: "Dashboard",
            href: "/admin/dashboard",
        },

        {
            title: "Tingkatan",
            href: "/admin/tingkatan",
        },

        {
            title: "Kelas",
            href: "/admin/kelas",
        },

        {
            title: "Kategori Mapel",
            href: "/admin/kategori-mapel",
        },

        {
            title: "Mapel",
            href: "/admin/mapel",
        },

        {
            title: "Guru",
            href: "/admin/guru",
        },

        {
            title: "Siswa",
            href: "/admin/siswa",
        },
    ];

    return (
        <aside className="w-64 min-h-screen border-r bg-white">
            <div className="border-b p-5">
                <h1 className="text-xl font-bold">Evaluasi Madrasah</h1>
            </div>

            <nav className="p-4 space-y-2">
                {menus.map((menu) => (
                    <Link
                        key={menu.href}
                        href={menu.href}
                        className={`block rounded-lg px-4 py-3 transition ${
                            url.startsWith(menu.href)
                                ? "bg-blue-600 text-white"
                                : "hover:bg-gray-100"
                        }`}
                    >
                        {menu.title}
                    </Link>
                ))}
            </nav>
        </aside>
    );
}
