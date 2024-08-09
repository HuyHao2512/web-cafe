<?php


namespace App\Http\Services\Product;


use App\Models\Products;

class ProductService
{
    const LIMIT = 16;

    public function get($page = null)
    {
        return Products::select('SP_MA', 'SP_TENSANPHAM', 'SP_GIA', 'SP_HINHANH')
            ->orderByDesc('SP_MA')
            ->when($page != null, function ($query) use ($page) {
                $query->offset($page * self::LIMIT);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function show($id)
    {
        return Products::where('SP_MA', $id)
            // ->where('active', 1)
            // ->with('menu')
            ->firstOrFail();
    }

    public function more($id)
    {
        return Products::select('SP_MA', 'SP_TENSANPHAM', 'SP_GIA', 'SP_HINHANH')
            // ->where('active', 1)
            ->where('SP_MA', '!=', $id)
            ->orderByDesc('SP_MA')
            ->limit(8)
            ->get();
    }
}