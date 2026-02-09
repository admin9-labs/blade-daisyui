# List

DaisyUI [List](https://daisyui.com/components/list/) 的 Blade 封装。

## 用法

```blade
<x-dui::list>
    <x-dui::list.row>第一行</x-dui::list.row>
    <x-dui::list.row>第二行</x-dui::list.row>
</x-dui::list>
```

## Props

### list (index)

无额外 Props。

### list.row

无额外 Props。

## 子组件

- `<x-dui::list.row>` — 列表行

## 示例

### 基础列表

```blade
<x-dui::list class="bg-base-100 rounded-box shadow-md">
    <x-dui::list.row>
        <div>项目一</div>
    </x-dui::list.row>
    <x-dui::list.row>
        <div>项目二</div>
    </x-dui::list.row>
    <x-dui::list.row>
        <div>项目三</div>
    </x-dui::list.row>
</x-dui::list>
```

### 带图片和描述的列表

```blade
<x-dui::list class="bg-base-100 rounded-box shadow-md">
    <x-dui::list.row>
        <div>
            <img class="size-10 rounded-box" src="/img/cover1.jpg" alt="封面" />
        </div>
        <div>
            <div class="font-bold">歌曲名称</div>
            <div class="text-xs uppercase opacity-60">艺术家</div>
        </div>
        <p class="text-xs opacity-60 font-mono">3:45</p>
    </x-dui::list.row>
    <x-dui::list.row>
        <div>
            <img class="size-10 rounded-box" src="/img/cover2.jpg" alt="封面" />
        </div>
        <div>
            <div class="font-bold">另一首歌</div>
            <div class="text-xs uppercase opacity-60">另一位艺术家</div>
        </div>
        <p class="text-xs opacity-60 font-mono">4:12</p>
    </x-dui::list.row>
</x-dui::list>
```

## 渲染结果

```html
<ul class="list bg-base-100 rounded-box shadow-md">
    <li class="list-row">
        <div>项目一</div>
    </li>
    <li class="list-row">
        <div>项目二</div>
    </li>
</ul>
```
