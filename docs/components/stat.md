# Stat

DaisyUI [Stat](https://daisyui.com/components/stat/) 的 Blade 封装。

## 用法

```blade
<x-dui::stat>
    <x-dui::stat.stat>
        <x-dui::stat.title>总用户</x-dui::stat.title>
        <x-dui::stat.value>31K</x-dui::stat.value>
        <x-dui::stat.desc>较上月增长 21%</x-dui::stat.desc>
    </x-dui::stat.stat>
</x-dui::stat>
```

## Props

### stat (index) — 统计容器

| Prop | Type | Default | Values |
|------|------|---------|--------|
| horizontal | bool | false | — |
| vertical | bool | false | — |

### stat.stat

无额外 Props。

### stat.title

无额外 Props。

### stat.value

无额外 Props。

### stat.desc

无额外 Props。

### stat.figure

无额外 Props。

### stat.actions

无额外 Props。

## 子组件

- `<x-dui::stat.stat>` — 单个统计项
- `<x-dui::stat.title>` — 统计标题
- `<x-dui::stat.value>` — 统计数值
- `<x-dui::stat.desc>` — 统计描述
- `<x-dui::stat.figure>` — 统计图标/图片
- `<x-dui::stat.actions>` — 统计操作区

## 示例

### 基础统计

```blade
<x-dui::stat class="shadow">
    <x-dui::stat.stat>
        <x-dui::stat.title>总用户</x-dui::stat.title>
        <x-dui::stat.value>31,200</x-dui::stat.value>
        <x-dui::stat.desc>较上月增长 21%</x-dui::stat.desc>
    </x-dui::stat.stat>
</x-dui::stat>
```

### 多个统计项

```blade
<x-dui::stat class="shadow">
    <x-dui::stat.stat>
        <x-dui::stat.title>总页面浏览</x-dui::stat.title>
        <x-dui::stat.value>89,400</x-dui::stat.value>
        <x-dui::stat.desc>较上月增长 21%</x-dui::stat.desc>
    </x-dui::stat.stat>
    <x-dui::stat.stat>
        <x-dui::stat.title>新注册</x-dui::stat.title>
        <x-dui::stat.value>1,200</x-dui::stat.value>
        <x-dui::stat.desc class="text-secondary">较上月增长 14%</x-dui::stat.desc>
    </x-dui::stat.stat>
    <x-dui::stat.stat>
        <x-dui::stat.title>新注册</x-dui::stat.title>
        <x-dui::stat.value>1,200</x-dui::stat.value>
        <x-dui::stat.desc>较上月减少 14%</x-dui::stat.desc>
    </x-dui::stat.stat>
</x-dui::stat>
```

### 带图标

```blade
<x-dui::stat class="shadow">
    <x-dui::stat.stat>
        <x-dui::stat.figure class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
        </x-dui::stat.figure>
        <x-dui::stat.title>总页面浏览</x-dui::stat.title>
        <x-dui::stat.value class="text-primary">25.6K</x-dui::stat.value>
        <x-dui::stat.desc>较上月增长 21%</x-dui::stat.desc>
    </x-dui::stat.stat>
</x-dui::stat>
```

### 水平排列

```blade
<x-dui::stat horizontal class="shadow">
    <x-dui::stat.stat>
        <x-dui::stat.title>收入</x-dui::stat.title>
        <x-dui::stat.value>$12,000</x-dui::stat.value>
    </x-dui::stat.stat>
</x-dui::stat>
```

### 垂直排列

```blade
<x-dui::stat vertical class="shadow">
    <x-dui::stat.stat>
        <x-dui::stat.title>收入</x-dui::stat.title>
        <x-dui::stat.value>$12,000</x-dui::stat.value>
    </x-dui::stat.stat>
</x-dui::stat>
```

## 渲染结果

```html
<div class="stats shadow">
    <div class="stat">
        <div class="stat-title">总用户</div>
        <div class="stat-value">31K</div>
        <div class="stat-desc">较上月增长 21%</div>
    </div>
</div>
```
