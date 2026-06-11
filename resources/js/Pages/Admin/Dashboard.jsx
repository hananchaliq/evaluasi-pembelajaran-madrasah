import AdminLayout from "@/Layouts/AdminLayout";
import StatCard from "@/Components/StatCard";

export default function Dashboard({ stats }) {
    return (
        <AdminLayout>
            <h1 className="mb-6 text-3xl font-bold">Dashboard Admin</h1>

            <div className="grid gap-4 md:grid-cols-2 xl:grid-cols-5">
                <StatCard title="Guru" value={stats.teachers} />

                <StatCard title="Siswa" value={stats.students} />

                <StatCard title="Kelas" value={stats.kelas} />

                <StatCard title="Mapel" value={stats.subjects} />

                <StatCard title="Evaluasi" value={stats.evaluations} />
            </div>
        </AdminLayout>
    );
}
