# Chat

DaisyUI [Chat bubble](https://daisyui.com/components/chat/) 的 Blade 封装。

## 用法

```blade
<x-dui::chat>
    <x-dui::chat.image>
        <img src="/img/avatar.jpg" alt="头像" />
    </x-dui::chat.image>
    <x-dui::chat.header>张三 <time class="text-xs opacity-50">12:45</time></x-dui::chat.header>
    <x-dui::chat.bubble>你好！</x-dui::chat.bubble>
    <x-dui::chat.footer>已送达</x-dui::chat.footer>
</x-dui::chat>
```

## Props

### chat (index)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| end | bool | false | — |

### chat.bubble

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string\|null | null | neutral, primary, secondary, accent, info, success, warning, error |

### chat.header

无额外 Props。

### chat.footer

无额外 Props。

### chat.image

无额外 Props。

## 子组件

- `<x-dui::chat.image>` — 聊天头像
- `<x-dui::chat.header>` — 聊天头部（用户名、时间等）
- `<x-dui::chat.bubble>` — 聊天气泡
- `<x-dui::chat.footer>` — 聊天底部（状态信息）

## 示例

### 左侧消息（默认）

```blade
<x-dui::chat>
    <x-dui::chat.image>
        <div class="w-10 rounded-full">
            <img src="/img/avatar.jpg" alt="头像" />
        </div>
    </x-dui::chat.image>
    <x-dui::chat.header>张三</x-dui::chat.header>
    <x-dui::chat.bubble>你好，最近怎么样？</x-dui::chat.bubble>
    <x-dui::chat.footer>已送达</x-dui::chat.footer>
</x-dui::chat>
```

### 右侧消息

```blade
<x-dui::chat end>
    <x-dui::chat.image>
        <div class="w-10 rounded-full">
            <img src="/img/avatar2.jpg" alt="头像" />
        </div>
    </x-dui::chat.image>
    <x-dui::chat.header>李四</x-dui::chat.header>
    <x-dui::chat.bubble color="primary">我很好，谢谢！</x-dui::chat.bubble>
</x-dui::chat>
```

### 带颜色的气泡

```blade
<x-dui::chat>
    <x-dui::chat.bubble color="primary">Primary</x-dui::chat.bubble>
</x-dui::chat>
<x-dui::chat end>
    <x-dui::chat.bubble color="secondary">Secondary</x-dui::chat.bubble>
</x-dui::chat>
```

## 渲染结果

```html
<div class="chat chat-start">
    <div class="chat-image">
        <div class="w-10 rounded-full">
            <img src="/img/avatar.jpg" alt="头像" />
        </div>
    </div>
    <div class="chat-header">张三</div>
    <div class="chat-bubble">你好！</div>
    <div class="chat-footer">已送达</div>
</div>
```
