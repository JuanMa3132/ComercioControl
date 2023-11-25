<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function updateProfile(ProfileRequest $request)
    {
        try {
            $user = Auth::user();

            // Validar que se ha enviado una imagen
            if ($request->hasFile('photo')) {
                // Eliminar la imagen anterior (si existe)
                if ($user->photo) {
                    Storage::delete($user->photo);
                }

                // Subir la nueva imagen
                $photo = $request->file('photo');
                $photoName = time() . '_' . $photo->getClientOriginalName();
                $path = $photo->storeAs('uploads', $photoName);
                $user->photo = $path;
            }

            // Actualizar otros campos
            $user->name = $request->name;
            $user->email = $request->email;

            // Actualizar contraseña si se proporciona
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password);
            }

            // Guardar los cambios
            $user->save();

            return redirect()->back()->with('success', 'Perfil actualizado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el perfil: ' . $e->getMessage());
        }
    }
}
